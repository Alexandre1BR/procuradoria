<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 22/01/2018
 * Time: 12:31.
 */

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
        $model = $this->create($request->all());

        $request->session()->flash('status', 'Dado salvo com sucesso!');

        is_null($id = $request->input('id'))
                ? $model = new $this->model()
                : $model = $this->model::find($id);
        $model->fill($request->all());
        //dd($model);
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
}
