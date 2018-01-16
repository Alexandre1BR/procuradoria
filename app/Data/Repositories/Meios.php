<?php

namespace App\Data\Repositories;

use App\Data\Models\Meio as Meio;
use Illuminate\Http\Request;

class Meios
{
    public function createFromRequest(Request $request)
    {
        return Meio::create($request->all());
    }
}
