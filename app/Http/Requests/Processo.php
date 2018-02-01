<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Processo extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [

//            'numero_judicial' => 'required',
//            'numero_alerj'    => 'size:7',
//            'tribunal_id' => 'required',
//            'vara' => 'required', //'origem_complemento',
//            'data_distribuicao',
//            'acao_id' => 'required',
//            'relator_id' => 'required',
//            'autor' => 'required',
//            'reu' => 'required',
            'procurador_id' => 'required',
           'estagiario_id' => 'required',
            'tipo_meio_id' => 'required',
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            return redirect()->route('andamentos.create')
                ->withErrors($validator)
                ->withInput();
        }
    }
}
