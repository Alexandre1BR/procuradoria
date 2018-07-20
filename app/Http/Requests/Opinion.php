<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Opinion extends FormRequest
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
            'opinion_scope_id' => 'required',
            'attorney_id' => 'required',
            'opinion_type_id' => 'required',
            'date' => 'required',
            'abstract' => 'required',
            'pdf_file' => is_null($this->id) ? 'required|mimes:pdf' : ''
            // 'doc_file' => 'required|mimes:doc',
        ];
    }
}
