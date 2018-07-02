<?php
namespace App\Http\Requests;

use App\Rules\UniqueOpinionsSubject;
use Illuminate\Foundation\Http\FormRequest;

class OpinionsSubject extends FormRequest
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
            'opinion_id' => ['required', new UniqueOpinionsSubject()],
            'subject_id' => 'required'
        ];
    }
}
