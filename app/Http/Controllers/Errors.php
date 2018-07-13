<?php
namespace App\Http\Controllers;

class Errors extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userDisabled()
    {
        return view('errors.user-disabled');
    }
}
