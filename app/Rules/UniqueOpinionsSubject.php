<?php

namespace App\Rules;

use App\Data\Repositories\OpinionsSubjects as OpinionsSubjectsRepository;
use Illuminate\Contracts\Validation\Rule;

class UniqueOpinionsSubject implements Rule
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
        return (
            app(OpinionsSubjectsRepository::class)->whereOpinionAndSubjectCount(
                request('opinion_id'),
                request('subject_id')
            ) < 1
        );
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O assunto já está relacionado à opinião.';
    }
}
