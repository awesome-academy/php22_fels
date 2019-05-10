<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:32',
            'password_confirmation' => 'required|same:password',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email',
            'email.email' => 'Email is incorect',
            'email.unique' => 'This email already exists',
            'password.required' => 'Please enter your password',
            'password.min' => 'Password minimum 8 characters',
            'password.max' => 'Password up to 32 characters',
            'password_confirmation.required' => 'Please enter your password confirm',
            'password_confirmation.same' => 'Password confirm is not the same',
        ];
    }
}
