<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => 'required|url',
            'github' => 'required|url',
            'image' => 'required|image',
            'type_id' => 'required|exists:types,id',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'title.min' => 'the title must be minimum 5 chart',
            'title.max' => 'the title must be maximum 255 chart',
            'description.required' => 'The description is required',
            'url.required' => 'The url is required',
            'url.url' => 'The url must be a valid url',
            'github.required' => 'The github is required',
            'github.url' => 'The github must be a valid url',
            'image.required' => 'The image is required',
            'image.image' => 'The image must be a valid image',
            'type_id.required' => 'The type is required',
            'type_id.exists' => 'The type must be a valid type',
        ];
    }
}
