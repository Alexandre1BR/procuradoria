<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 12/01/2018
 * Time: 10:16.
 */

namespace App\Http\Controllers;

use App\Data\Repositories\TiposUsuarios as TiposUsuariosRepository;
use App\Http\Requests\TipoUsuario as TipoUsuarioRequest;

class TiposUsuarios extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('tipos_usuarios.create');
    }

    /**
     * @param TipoUsuarioRequest      $request
     * @param TiposUsuariosRepository $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(
        TipoUsuarioRequest $request,
        TiposUsuariosRepository $repository
    ) {
        $repository->createFromRequest($request);

        return $this->create();
    }
}
