<?php
namespace App\Data\Models;

use App\Data\Presenters\OpinionSubjectPresenter;

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

    protected $presenters = ['edit_link'];

    public function getPresenterClass()
    {
        return OpinionSubjectPresenter::class;
    }
}
