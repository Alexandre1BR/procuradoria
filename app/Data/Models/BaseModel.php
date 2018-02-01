<?php

namespace App\Data\Models;

use App\Data\Presenters\BasePresenter;
use Illuminate\Database\Eloquent\Model;
use Venturecraft\Revisionable\RevisionableTrait;
use McCool\LaravelAutoPresenter\HasPresenter;

abstract class BaseModel extends Model implements HasPresenter
{
    use RevisionableTrait;

    protected $revisionEnabled = true;

    protected $revisionCreationsEnabled = true;

    protected $dataTypes = [];

    public static function getDataTypeOf($column)
    {
        $model = new static();

        return collect($model->dataTypes)->get($column);
    }

    public function getPresenterClass(){
        //return static::class;
        //return parent::class;
        return BasePresenter::class;
    }

}
