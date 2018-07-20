<?php
namespace App\Http\Controllers;

use App\Data\Repositories\Tags as TagsRepository;

class Tags extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return app(TagsRepository::class)
            ->all()
            ->map(function ($tag) {
                return [
                    'id' => $tag->name,
                    'name' => $tag->name,
                    'text' => $tag->name
                ];
            });
    }
}
