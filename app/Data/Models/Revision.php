<?php

namespace App\Data\Models;

use App\Data\Presenters\RevisionPresenter;

class Revision extends BaseModel
{
    /**
     * @var string
     */
    protected $table = 'revisions';

    /**
     * @var array
     */
    protected $relations = [
        'user',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return string
     */
    public function getPresenterClass()
    {
        return RevisionPresenter::class;
    }
}
