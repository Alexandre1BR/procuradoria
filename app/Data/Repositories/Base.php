<?php

namespace App\Data\Repositories;

use Illuminate\Http\Request;

class Base
{
    protected $model;

    /**
     * @param $request
     *
     * @return object
     */
    public function createFromRequest(Request $request)
    {
        is_null($id = $request->input('id'))
                ? $model = new $this->model()
                : $model = $this->model::find($id);
        $model->fill($request->all());

        $model->save();

        return $model;
    }

    public function create($data)
    {
        $model = is_null($id = isset($data['id'])
            ? $data['id']
            : null)
                ? new $this->model()
                : $this->model::find($id);

        $model->fill($data);

        $model->save();

        return $model;
    }

    public function firstOrCreate(array $search, array $attributes = [])
    {
        return $this->model::firstOrCreate($search, $attributes);
    }

    public function new()
    {
        return new $this->model();
    }

    public function all()
    {
        return $this->model::all();
    }

    public function cleanString($string)
    {
        return str_replace(["\n"], [""], $string);
    }
}
