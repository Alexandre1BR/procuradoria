<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 31/01/2018
 * Time: 15:08.
 */

namespace App\Data\Scope;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class Processo implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('data_arquivamento', '=', null);
    }
}
