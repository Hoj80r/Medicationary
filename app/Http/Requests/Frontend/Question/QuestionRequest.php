<?php

namespace App\Http\Requests\Frontend\Question;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:25',
            'question_title' => 'required|min:5|max:80',
            'email' => 'nullable|email|min:3|max:200',
            'mobile' => 'nullable|digits:11',
            'explanation' => 'required|min:10'
        ];
    }
}
