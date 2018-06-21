<?php
namespace App\Data\Models;

class OpinionType extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'opinion_types';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
