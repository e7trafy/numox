<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ];
    }
}
