<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'header' => 'required|string',
            'text' => 'required|string',
            'text_preview' => 'required|string|max:255',
            'image' => 'file|image|mimes:jpeg,jpg,png|dimensions:min_width=1000,min_height=667',
        ];
    }
}
