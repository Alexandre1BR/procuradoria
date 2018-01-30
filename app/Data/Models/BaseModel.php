<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Venturecraft\Revisionable\RevisionableTrait;

class BaseModel extends Model
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
}
