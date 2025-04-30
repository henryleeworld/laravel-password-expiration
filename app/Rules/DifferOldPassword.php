<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

/**
 * Differ old password
 *
 * @filesource
 */
class DifferOldPassword implements Rule
{
    /**
     * Constructor.
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
        return !Hash::check($value, auth()->user()->password);
    }

    /**
     * Get the validation error message.
     *
     * @return array
     */
    public function message()
    {
        return __('The new password is the same as the old password.');
    }
}
