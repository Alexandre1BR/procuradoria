<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Tags as TagsRepository;

class Tags extends Controller
{
    public function index()
    {
        return app(TagsRepository::class)->all();
    }
}
