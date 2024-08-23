<?php

namespace App\Http\Requests\Admin\Webinar;

use Illuminate\Foundation\Http\FormRequest;

class WebinarRequest extends FormRequest
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
            'title' => 'required|min:3|max:128',
            'category' => 'required|min:3|max:128',
            'description' => 'required|min:10',
            'webinar_url' => 'required|file|mimes:mp4,mkv',
            'thumbnail_url' => 'required|image|mimes:jpeg,png,jpg'
        ];
    }
}
