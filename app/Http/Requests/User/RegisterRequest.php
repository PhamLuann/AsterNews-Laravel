<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'min:4'],
            'password-confirm' => ['required', 'min:4', 'same:password'],
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is require input!',
            'name.required' => 'Name is require input!',
            'password.required' => 'Password is require input!',
            'password.min' => 'Password must >= 4 character!',
            'password-confirm.required' => 'Password is require input!',
            'password-confirm.min' => 'Password must >= 4 character!',
            'password-confirm.same' => 'Password not match!',
        ];
    }
}
