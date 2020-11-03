<?php

namespace App\Http\Requests;

use App\Rules\DifferOldPassword;
use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

class PasswordExpiredPostRequest extends FormRequest
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
            'current_password'      => ['required', new MatchOldPassword],
            'password'              => ['required', 'confirmed', 'min:6', new DifferOldPassword],
		    'password_confirmation' => ['required', 'min:6', 'same:password'],
        ];
    }
}
