<?php
namespace App\Data\Repositories;

use App\Data\Models\OpinionsSubject as OpinionsSubjectModel;

class OpinionsSubjects extends Base
{
    /**
     * @var string
     */
    protected $model = OpinionsSubjectModel::class;

    public function whereOpinionAndSubjectCount($opinion_id, $subject_id)
    {
        return OpinionsSubjectModel
            ::where('opinion_id', '=', $opinion_id)
            ->where('subject_id', '=', $subject_id)
            ->count();
    }
}
