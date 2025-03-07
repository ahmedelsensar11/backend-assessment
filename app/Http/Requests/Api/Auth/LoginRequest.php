<?php
namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required||email',
            'password' => 'required|string|min:8|max:50|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,50}$/',
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => 'Password must contains Uppercase and Lowercase letters, numbers and special characters.',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
