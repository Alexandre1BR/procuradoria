<?php

namespace App\Http\Controllers;

class Errors extends Controller
{
    public function userDisabled()
    {
        return view('errors.user-disabled');
    }
}
