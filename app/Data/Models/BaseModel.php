<?php
namespace App\Data\Models;

use App\Data\Presenters\BasePresenter;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\Facades\AutoPresenter;
use McCool\LaravelAutoPresenter\HasPresenter;
use Venturecraft\Revisionable\RevisionableTrait;

abstract class BaseModel extends Model implements HasPresenter
{
    use RevisionableTrait;

    /**
     * @var bool
     */
    protected $revisionEnabled = true;

    /**
     * @var bool
     */
    protected $revisionCreationsEnabled = true;

    /**
     * @var array
     */
    protected $dataTypes = [];

    /**
     * @var array
     */
    protected $presenters = [];

    /**
     * @param $column
     *
     * @return mixed
     */
    public static function getDataTypeOf($column)
    {
        $model = new static();

        return collect($model->dataTypes)->get($column);
    }

    /**
     * @return string
     */
    public function getPresenterClass()
    {
        return BasePresenter::class;
    }

    /**
     * @return array
     */
    public function attributesToArray()
    {
        $attributes = parent::attributesToArray();

        $decorated = AutoPresenter::decorate($this);

        foreach ($this->presenters as $key) {
            $attributes[$key] = $decorated->{$key};
        }

        return $attributes;
    }
}
