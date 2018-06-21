<?php

namespace App\Data\Models;

class OpinionSubject extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'opinion_subjects';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
