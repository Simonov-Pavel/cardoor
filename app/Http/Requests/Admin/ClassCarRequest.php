<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ClassCarRequest extends FormRequest
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
        $rules = [
            'title' => 'required|string|unique:class_cars,title',
        ];
    
        if($this->route()->named('class.update')){
            $rules['title'] .= ',' . $this->route()->parameter('class')->id;
        }
    
        return $rules;
    }
}
