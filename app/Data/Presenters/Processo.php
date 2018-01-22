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

class Processo extends BasePresenter
{
    public function data_distribuicao()
    {
        $data_distribuicao = $this->wrappedObject->data_distribuicao;

        return Carbon::createFromFormat('Y-m-d H:i:s', $data_distribuicao)->format('d/m/Y');
    }
}
