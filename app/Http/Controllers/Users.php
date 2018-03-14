<?php

namespace App\Http\Controllers;

use App\Data\Models\User as UserModel;
use App\Data\Repositories\Users as UsersRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Users extends Controller
{
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
        return view('users.index')->with('users', $this->usersRepository->all());
    }

    public function enable($id, $enable = true)
    {
        $model = $this->usersRepository->findUserById($id);

        $model->disabled_at = $enable ? null : now();
        $model->disabled_by_id = $enable ? null : Auth::user()->id;

        $model->save();

        return redirect()->action('Users@index')->with('users', $this->usersRepository->all());
        //return $this->index();
    }

    public function disable($id)
    {
        return $this->enable($id, false);
    }
}
