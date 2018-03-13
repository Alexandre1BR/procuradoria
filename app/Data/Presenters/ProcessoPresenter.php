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

class ProcessoPresenter extends BasePresenter
{
    public function data_distribuicao()
    {
        $data_distribuicao = $this->wrappedObject->data_distribuicao;

        return !is_null($data_distribuicao) ? Carbon::createFromFormat('Y-m-d H:i:s', $data_distribuicao)->format('Y-m-d') : null;
    }

    public function data_distribuicao_formatado()
    {
        $data_distribuicao = $this->wrappedObject->data_distribuicao;

        return !is_null($data_distribuicao) ? Carbon::createFromFormat('Y-m-d H:i:s', $data_distribuicao)->format('d/m/Y') : null;
    }

    public function data_recebimento()
    {
        $data_recebimento = $this->wrappedObject->data_recebimento;

        return !is_null($data_recebimento) ? Carbon::createFromFormat('Y-m-d H:i:s', $data_recebimento)->format('Y-m-d') : null;
    }

    public function data_recebimento_formatado()
    {
        $data_recebimento = $this->wrappedObject->data_recebimento;

        return !is_null($data_recebimento) ? Carbon::createFromFormat('Y-m-d H:i:s', $data_recebimento)->format('d/m/Y') : null;
    }
}
