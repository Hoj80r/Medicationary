<?php

namespace App\Http\Requests\Admin\Podcast;

use Illuminate\Foundation\Http\FormRequest;

class PodcastRequest extends FormRequest
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
            'podcast_url' => 'required|file|mimes:mp3,m4a',
            'thumbnail_url' => 'required|image|mimes:jpeg,png,jpg'
        ];
    }
}
