<?php

namespace App\Data\Models;

use Spatie\Tags\HasTags;
use App\Data\Presenters\BasePresenter;
use Illuminate\Database\Eloquent\Model;
use McCool\LaravelAutoPresenter\HasPresenter;
use Venturecraft\Revisionable\RevisionableTrait;

abstract class BaseModel extends Model implements HasPresenter
{
    use RevisionableTrait, HasTags;

    protected $revisionEnabled = true;

    protected $revisionCreationsEnabled = true;

    protected $dataTypes = [];

    public static function getDataTypeOf($column)
    {
        $model = new static();

        return collect($model->dataTypes)->get($column);
    }

    public function getPresenterClass()
    {
        //return static::class;
        //return parent::class;
        return BasePresenter::class;
    }
}
