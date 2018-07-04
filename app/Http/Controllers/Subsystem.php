<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class Subsystem extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return view('subsystem.index');
    }

    /**
     * @return mixed
     */
    public function select($subsystem)
    {
        Session::put('subsystem', $subsystem);

        return redirect('/');
    }
}
