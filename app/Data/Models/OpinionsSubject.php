<?php

namespace App\Data\Models;

class OpinionsSubject extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'opinions_subjects';

    /**
     * @var array
     */
    protected $fillable = ['opinion_id', 'subject_id'];

    protected $with = ['opinion', 'subject'];

    public function opinion()
    {
        return $this->belongsTo(Opinion::class);
    }

    public function subject()
    {
        return $this->belongsTo(OpinionSubject::class);
    }
}
