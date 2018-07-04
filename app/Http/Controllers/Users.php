<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Users as UsersRepository;
use App\Http\Requests\User as UserRequest;
use Illuminate\Support\Facades\Auth;

class Users extends Controller
{
    /**
     * @var UsersRepository
     */
    private $usersRepository;

    /**
     * @var string
     */
    protected $model = UserModel::class;

    /**
     * Users constructor.
     *
     * @param UsersRepository $usersRepository
     */
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    /**
     * @return mixed
     */
    public function procuradores()
    {
        return $this->usersRepository->getByType('Procurador');
    }

    /**
     * @return mixed
     */
    public function assessores()
    {
        return $this->usersRepository->getByType('Assessor');
    }

    /**
     * @return mixed
     */
    public function estagiarios()
    {
        return $this->usersRepository->getByType('Estagiario');
    }

    /**
     * @return $this
     */
    public function index()
    {
        return view('users.index')->with(
            'users',
            $this->usersRepository->all()
        );
    }

    /**
     * @param $id
     * @param bool $enable
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function enable($id, $enable = true)
    {
        $model = $this->usersRepository->findUserById($id);

        $model->disabled_at = $enable ? null : now();
        $model->disabled_by_id = $enable ? null : Auth::user()->id;

        $model->save();

        return redirect()
            ->action('Users@index')
            ->with('users', $this->usersRepository->all());

        //return $this->index();
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function disable($id)
    {
        return $this->enable($id, false);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * @return array
     */
    public function getUsersData(): array
    {
        return [
            'userType' => app(UsersRepository::class)
                    ->all()
                    ->pluck('nome', 'id'),
        ];
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $user = app(UsersRepository::class)->findUserById($id);

        return view('users.form')
            ->with('user', $user)
            ->with('formDisabled', true)
            ->with($this->getUsersData());
    }

    /**
     * @param UserRequest     $request
     * @param UsersRepository $repository
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, UsersRepository $repository)
    {
        if (!$request->has('no_notifications')) {
            $request->merge(['no_notifications' => 0]);
        }

        if (!$request->has('all_notifications')) {
            $request->merge(['all_notifications' => 0]);
        }

        $repository->createFromRequest($request);

        return redirect()
            ->route('users.index')
            ->with($this->getSuccessMessage());
    }
}
