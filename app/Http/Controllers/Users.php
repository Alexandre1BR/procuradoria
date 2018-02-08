<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Users as UsersRepository;

class Users extends Controller
{
    /**
     * @var UsersRepository
     */
    private $usersRepository;

    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function procuradores()
    {
        return $this->usersRepository->getByType('Procurador');
    }

    public function assessores()
    {
        return $this->usersRepository->getByType('Assessor');
    }

    public function estagiarios()
    {
        return $this->usersRepository->getByType('Estagiario');
    }
}
