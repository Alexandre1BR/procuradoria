<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Data\Repositories\ProcessosLeis as ProcessosLeisRepository;

class UniqueProcessoLei implements Rule
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
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return (app(ProcessosLeisRepository::class)->whereProcessoAndLeiCount(request('processo_id'), request('lei_id')) < 1);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'A lei já está relacionada ao processo.';
    }
}
