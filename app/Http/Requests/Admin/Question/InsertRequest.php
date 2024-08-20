<?php

namespace App\Http\Requests\Admin\Question;

use Illuminate\Foundation\Http\FormRequest;

class InsertRequest extends FormRequest
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
//            'question_id' => 'required|exists:questions,id',
            'title' => 'required|min:3|max:75',
            'category' => 'required|min:5|max:50',
            'description' => 'required|min:5',
            'thumbnail_url' => 'required|image|mimes:png,jpeg,jpg'
        ];
    }
}
