<?php
/**
 * Created by PhpStorm.
 * User: afdsilva
 * Date: 22/01/2018
 * Time: 12:31
 */

namespace App\Data\Repositories;


class Base {

    protected $model;

    /**
     * @param $request
     *
     * @return void
     */
    public function createFromRequest(Request $request) {

        is_null($id = $request->input('id'))
                ? $tribunal = new $this->model()
                : $tribunal = $this->model::find($id);

        $tribunal->fill($request->all());

        $tribunal->save();

        $request->session()->flash('status', 'Dado salvo com sucesso!');
    }

}