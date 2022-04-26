<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'address' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'start_week' => ['required', 'string'],
            'end_week' => ['required', 'string'],
            'start_time' => ['required', 'string'],
            'end_time' => ['required', 'string'],
            'description' => ['required', 'string'],
            'map' => ['nullable','string'],
            'logo' => ['mimes:jpeg,jpg,png', 'dimensions:min_width=100, min_height=50'],
        ];
    }
}
