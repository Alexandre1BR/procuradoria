<?php

namespace App\Http\Controllers;

class Messages extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('messages');
    }
}
