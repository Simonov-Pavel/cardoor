<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'description' => 'required|string',
            'video' => 'required|string',
            'image' => 'file|image|mimes:jpeg,jpg,png|dimensions:min_width=698,min_height=241',
            'conditions_header' => 'required|string',
            'conditions_rental' => 'required|string',
        ];
    }
}
