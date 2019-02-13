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

class AndamentoPresenter extends BasePresenter
{
    /**
     * @return null|string
     */
    public function data_prazo()
    {
        $data_prazo = $this->wrappedObject->data_prazo;

        return !is_null($data_prazo)
            ? Carbon::createFromFormat('Y-m-d H:i:s', $data_prazo)->format(
                'Y-m-d'
            )
            : null;
    }

    /**
     * @return null|string
     */
    public function data_entrega()
    {
        $data_entrega = $this->wrappedObject->data_entrega;

        return !is_null($data_entrega)
            ? Carbon::createFromFormat('Y-m-d H:i:s', $data_entrega)->format(
                'Y-m-d'
            )
            : null;
    }

    /**
     * @return null|string
     */
    public function data_andamento()
    {
        $data_andamento = $this->wrappedObject->data_andamento;

        return !is_null($data_andamento)
            ? Carbon::createFromFormat('Y-m-d H:i:s', $data_andamento)->format(
                'Y-m-d'
            )
            : null;
    }

    /**
     * @return null|string
     */
    public function data_prazo_formatado()
    {
        $data_prazo = $this->wrappedObject->data_prazo;

        return !is_null($data_prazo)
            ? Carbon::createFromFormat('Y-m-d H:i:s', $data_prazo)->format(
                'd/m/Y'
            )
            : null;
    }

    /**
     * @return null|string
     */
    public function data_entrega_formatado()
    {
        $data_entrega = $this->wrappedObject->data_entrega;

        return !is_null($data_entrega)
            ? Carbon::createFromFormat('Y-m-d H:i:s', $data_entrega)->format(
                'd/m/Y'
            )
            : null;
    }

    /**
     * @return null|string
     */
    public function data_andamento_formatado()
    {
        $data_andamento = $this->wrappedObject->data_andamento;

        return !is_null($data_andamento)
            ? Carbon::createFromFormat('Y-m-d H:i:s', $data_andamento)->format(
                'd/m/Y'
            )
            : null;
    }
}
