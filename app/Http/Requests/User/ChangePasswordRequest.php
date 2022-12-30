<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'current-password' => 'required|min:4',
            'new-password' => 'required|min:4',
            'confirm-password' => 'required|same:new-password|min:4',
        ];
    }
    public function messages()
    {
        return [
            'current-password.required' => 'Please enter your password!',
            'current-password.min' => 'Password must >= 4 characters',
            'new-password.required' => 'Please enter new password!',
            'new-password.min' => 'Password must >= 4 characters',
            'confirm-password.required' => 'Please confirm new password!',
            'confirm-password.same' => 'Password not match!',
            'confirm-password.min' => 'Password must >= 4 characters',
        ];
    }
}
