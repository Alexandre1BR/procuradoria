<?php

namespace App\Data\Models;

class OpinionScope extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'opinion_scopes';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
