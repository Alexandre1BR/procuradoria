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

class OpinionPresenter extends BasePresenter
{
    /**
     * @return null|string
     */
    public function formatted_date()
    {
        $date = $this->wrappedObject->date;

        //        dd($date);

        return !is_null($date)
            ? Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y')
            : null;
    }

    public function edit_link()
    {
        $id = $this->wrappedObject->id;

        return route('opinions.show', ['id' => $id]);
    }
}
