<?php

namespace App\Data\Models;

use App\Data\Presenters\RevisionPresenter;

class Revision extends BaseModel
{
    protected $table = 'revisions';

    protected $relations = [
        'user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPresenterClass()
    {
        return RevisionPresenter::class;
    }
}
