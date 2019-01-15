<?php

namespace App\Http\Requests;

use App\Data\Models\TipoAndamento;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Andamento extends FormRequest
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
        //dd($this->processo_id);
        return [
            //            'tipo_prazo_id'         => 'required',
            'processo_id'       => 'required',
            'tipo_andamento_id' => [
                'required',
                $this->tipo_andamento_id ==
                TipoAndamento::where('nome', 'Recebimento')
                    ->get()
                    ->first()->id
                    ? (is_null($this->id)
                        ? Rule::unique('andamentos')->whereIn('processo_id', [
                            $this->processo_id,
                        ])
                        : Rule::unique('andamentos')
                            ->whereIn('processo_id', [$this->processo_id])
                            ->whereNot('id', $this->id))
                    : '',
            ],
        ];
    }
}
