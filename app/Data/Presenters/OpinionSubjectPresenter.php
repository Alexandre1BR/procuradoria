<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 19/01/2018
 * Time: 16:28.
 */

namespace App\Data\Presenters;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;

class OpinionSubjectPresenter extends BasePresenter
{
    public function edit_link()
    {
        $id = $this->wrappedObject->id;

        return route('opinionSubjects.show', ['id' => $id]);
    }
}
