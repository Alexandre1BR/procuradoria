<?php

namespace App\Data\Repositories;

use App\Data\Models\Apenso;
use Illuminate\Http\Request;

class Apensos
{
    public function createFromRequest(Request $request)
    {
        return Apenso::create($request->all());
    }
}
