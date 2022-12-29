<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'password' => 'required|min:4',
            'password_confirm' => 'required|same:password|min:4'
        ];
    }
    public function messages()
    {
        return [
            'password.required' => 'Password is input required!',
            'password.min' => 'Password must >=4 characters!',
            'password_confirm.same' => 'Password not match!',
            'password_confirm.required' => 'Please confirm your password!',
            'password_confirm.min' => 'Password must >=4 characters!',
        ];
    }
}
