<?php

namespace App\Http\Controllers;

use App\Data\Models\User as UserModel;
use App\Data\Models\User;
use App\Data\Repositories\Users as UsersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Users extends Controller
{
    /**
     * @var UsersRepository
     */
    private $usersRepository;

    protected $model = UserModel::class;

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

    public function index()
    {
        return view('users.index')
                ->with('users', $this->usersRepository->all());
    }

    public function alterarStatus($email)
    {
        $model = $this->usersRepository->findUserByEmail($email);

        if($model->disabled_by_id == null){
            $model->disabled_at = now();
            $model->disabled_by_id = Auth::user()->id;
        } else {
            $model->disabled_at = null;
            $model->disabled_by_id = null;
        }
        $model->save();
        return view('users.index')->with('users', $this->usersRepository->all());
    }
}
