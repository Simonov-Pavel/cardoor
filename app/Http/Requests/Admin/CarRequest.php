<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'text' => 'required|string',
            'text' => 'required|string|max:150',
            'model' => 'required|string',
            'brithday' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'file|image|mimes:jpeg,jpg,png|dimensions:min_width=1280,min_height=800',
            'brand' => 'required|string|exists:brands,title',
            'body' => 'required|string|exists:bodies,title',
            'class' => 'required|string|exists:class_cars,title',
            'engine' => 'required|string|exists:engines,title',
            'transmission' => 'required|string|exists:transmissions,title',
        ];
    }
}
