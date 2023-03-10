<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' =>           ['required', 'max:255'],
            'password' =>       ['required', 'min:4'],
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is require input!',
            'password.required' => 'Password is require input!',
            'password.min' => 'Password must >= 4 character!'
        ];
    }
}
