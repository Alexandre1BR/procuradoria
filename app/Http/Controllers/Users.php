<?php

namespace App\Http\Controllers;

use App\Data\Models\User as UserModel;
use App\Data\Repositories\Users as UsersRepository;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User as UserRequest;

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

    public function create()
    {
        return view('users.create');
    }

    public function getUsersData(): array
    {
        return [
            'userType' => app(UsersRepository::class)->all()->pluck('nome', 'id'),
        ];
    }

    public function show($id)
    {
        $user = app(UsersRepository::class)->findUserById($id);

        return view('users.form')
            ->with('user', $user)
            ->with('formDisabled', true)
            ->with($this->getUsersData());
    }

    public function store(UserRequest $request, UsersRepository $repository)
    {
//        dd($request->all());

        $repository->createFromRequest($request);

        return redirect()->route('users.index')
            ->with($this->getSuccessMessage());
    }
}

