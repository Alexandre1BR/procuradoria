<?php
namespace App\Http\Requests;

use App\Rules\UniqueProcessoLei;
use Illuminate\Foundation\Http\FormRequest;

class ProcessoLei extends FormRequest
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
        return ['processo_id' => ['required', new UniqueProcessoLei()], 'lei_id' => 'required'];
    }
}
