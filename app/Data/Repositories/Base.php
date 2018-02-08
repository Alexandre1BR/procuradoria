<?php

namespace App\Data\Repositories;

use Illuminate\Http\Request;

abstract class Base
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

        $this->saveTags($request, $model);

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

        $model->saveTags(collect($data), $model);

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
        return $this->makeResultForSelect($this->model::all());
    }

    public function cleanString($string)
    {
        return str_replace(["\n"], [''], $string);
    }

    /**
     * @param Request $request
     * @param $model
     */
    protected function saveTags(Request $request, $model)
    {
        if ($request->has('tags')) {
            $model->syncTags($request->get('tags'));
        }
    }

    protected function makeResultForSelect($result, $label = 'nome', $value = 'id')
    {
        return $result->map(function ($row) use ($value, $label) {
            $row['text'] = empty($row->text) ? $row[$label] : $row->text;

            $row['value'] = $row[$value];

            return $row;
        });
    }
}
