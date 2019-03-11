<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 12/01/2018
 * Time: 10:16.
 */

namespace App\Http\Controllers;

use App\Data\Repositories\TiposPrazos as TiposPrazosRepository;
use App\Http\Requests\TipoPrazo as TipoPrazoRequest;

class TiposPrazos extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('tipos_prazos.create');
    }

    /**
     * @param TipoPrazoRequest      $request
     * @param TiposPrazosRepository $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(
        TipoPrazoRequest $request,
        TiposPrazosRepository $repository
    ) {
        $repository->createFromRequest($request);

        return $this->create();
    }
}
