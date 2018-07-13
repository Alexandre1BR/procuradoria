<?php

namespace App\Rules;

use App\Data\Models\OpinionSubject as OpinionSubjectModel;
use Illuminate\Contracts\Validation\Rule;

class NotRootSubject implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !is_null(
            OpinionSubjectModel::find(request('subject_id'))->parent_id
        );
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Não é possível relacionar a raíz.';
    }
}
