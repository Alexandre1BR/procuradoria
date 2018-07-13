<?php

namespace App\Data\Models;

class Notification extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'notifications';

    /**
     * @var array
     */
    protected $fillable = ['hash', 'subject', 'subject_id', 'via', 'to'];
}
