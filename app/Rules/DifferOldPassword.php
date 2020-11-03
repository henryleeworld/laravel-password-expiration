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
     * @param mixed $attribute Attribute
     * @param mixed $value     Value
     *
     * @return boolean
     */
    public function passes($attribute, $value)
    {
        return !Hash::check($value, auth()->user()->password);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('auth.password.expired.message.match_with_old_password');
    }
}
