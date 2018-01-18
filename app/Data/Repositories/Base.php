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
     * @return void
     */
    public function createFromRequest(Request $request)
    {
        is_null($id = $request->input('id'))
                ? $model = new $this->model()
                : $model = $this->model::find($id);

        $model->fill($request->all());
        //dd($model);
        $model->save();

        $request->session()->flash('status', 'Dado salvo com sucesso!');
    }
}
