<?php

namespace App\Http\Requests;

use App\Rules\DifferOldPassword;
use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;

class PasswordExpiredPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'current_password'      => ['required', new MatchOldPassword],
            'password'              => ['required', 'string', 'min:8', 'confirmed', new DifferOldPassword],
            'password_confirmation' => ['required', 'string', 'min:8', 'same:password'],
        ];
    }
}
