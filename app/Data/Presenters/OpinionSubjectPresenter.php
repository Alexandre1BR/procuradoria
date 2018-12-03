<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 19/01/2018
 * Time: 16:28.
 */

namespace App\Data\Presenters;

use McCool\LaravelAutoPresenter\BasePresenter;

class OpinionSubjectPresenter extends BasePresenter
{
    public function edit_link()
    {
        $id = $this->wrappedObject->id;

        return route('opinionSubjects.show', ['id' => $id]);
    }

    public function full_name()
    {
        $current = $this->wrappedObject;
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

    public function level()
    {
        return count($this->wrappedObject->ancestors);
    }

    public function indented_name()
    {
        $current = $this->wrappedObject;
        $level = count($this->wrappedObject->ancestors);
        $str = $current->name;

        for ($i = 1; $i < $level; $i++) {
            $str = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$str;
        }

        //        dd($str);

        return $str;
    }
}
