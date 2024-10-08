<?php

namespace App\Http\Requests\Admin\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:3|max:255|unique:users,email',
            'mobile' => 'required|digits:11|unique:users,mobile',
            'password' => 'required|min:8|max:24|unique:users,password',
            'role' => 'required|in:admin,user',
            'profile_url' => 'required|image|mimes:png,jpg,jpeg',
            'description' => 'required|min:10'
        ];
    }
}
