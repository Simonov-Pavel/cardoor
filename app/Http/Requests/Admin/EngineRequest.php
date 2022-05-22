<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EngineRequest extends FormRequest
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
            'title' => 'required|string|unique:bodies,title',
        ];
    
        if($this->route()->named('body.update')){
            $rules['title'] .= ',' . $this->route()->parameter('body')->id;
        }
    
        return $rules;
    }
}
