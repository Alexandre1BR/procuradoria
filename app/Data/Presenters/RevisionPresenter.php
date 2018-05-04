<?php

namespace App\Data\Presenters;

use McCool\LaravelAutoPresenter\BasePresenter;

class RevisionPresenter extends BasePresenter
{
    /**
     * @var array
     */
    protected $routes = [
        'App\Data\Models\TipoUsuario'   => null,
        'App\Data\Models\Tribunal'      => 'tribunais.show',
        'App\Data\Models\Acao'          => 'acoes.show',
        'App\Data\Models\TipoJuiz'      => null,
        'App\Data\Models\Juiz'          => 'juizes.show',
        'App\Data\Models\Meio'          => null,
        'App\Data\Models\Processo'      => 'processos.show',
        'App\Data\Models\User'          => 'users.show',
        'App\Data\Models\TipoAndamento' => null,
    ];

    /**
     * @return mixed
     */
    public function revisionable()
    {
        $parts = explode('\\', $this->wrappedObject->revisionable_type);

        return end(
            $parts
        );
    }

    /**
     * @return string|void
     */
    public function link()
    {
        if (is_null($routeName = $this->routes[$this->wrappedObject->revisionable_type])) {
            return;
        }

        return route($routeName, $this->wrappedObject->revisionable_id);
    }
}
