<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SightedInMarch implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[0-9]{4}-03-[0-9]{2}/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Why are you watching birds in March?';
    }
}
