<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 19/01/2018
 * Time: 16:28.
 */

namespace App\Data\Presenters;

use McCool\LaravelAutoPresenter\BasePresenter;
use App\Data\Models\OpinionSubject as OpinionSubjectModel;

class OpinionSubjectPresenter extends BasePresenter
{
    public function edit_link()
    {
        $id = $this->wrappedObject->id;

        return route('opinionSubjects.show', ['id' => $id]);
    }

    public function full_name()
    {
        $id = $this->wrappedObject->id;

        $current = OpinionSubjectModel::find($id);
        $ancestors = $current->ancestors;

        $fullName = '';
        foreach ($ancestors as $key => $ancestor) {
            if ($key != 0) {
                $fullName .= $ancestor->name;
                $fullName .= ' - ';
            }
        }

        $fullName .= $current->name;

        return $fullName;
    }
}
