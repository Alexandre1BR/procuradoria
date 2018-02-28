<?php

namespace App\Data\Models;

use App\Data\Presenters\BasePresenter;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;
use Venturecraft\Revisionable\RevisionableTrait;

abstract class BaseModel extends Model implements HasPresenter
{
    use RevisionableTrait;

    protected $revisionEnabled = true;

    protected $revisionCreationsEnabled = true;

    protected $dataTypes = [];

    protected $presenters = [];

    public static function getDataTypeOf($column)
    {
        $model = new static();

        return collect($model->dataTypes)->get($column);
    }

    public function getPresenterClass()
    {
        return BasePresenter::class;
    }

    /**
     * Convert the model's attributes to an array.
     *
     * @return array
     */
    public function attributesToArray()
    {
        $decorator = app('autopresenter');

        $attributes = parent::attributesToArray();

        foreach ($this->presenters as $key) {
            $attributes[$key] = $decorator->decorate($this)->{$key};
        }

        return $attributes;
    }
}
