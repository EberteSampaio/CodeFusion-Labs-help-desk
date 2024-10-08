<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUserCreationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'      => ['required','string','min:5','max:100'],
            'email'     => ['required','string','email','max:255','unique:users'],
            'password'  => ['required','string','min:8']
        ];
    }

}
