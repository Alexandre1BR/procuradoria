<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Lei extends FormRequest
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
            'lei_id' => 'nullable',
            'numero_lei' => 'required',
            'autor' => 'required',
            'assunto' => 'required',
            'link',
            //            'processo_id' => 'required',
            //            'lei_id' => 'required',
        ];
    }
}
