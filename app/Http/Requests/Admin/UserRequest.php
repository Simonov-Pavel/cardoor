<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'phone' => 'required|string|unique:users,phone',
            'email' => 'required|email|unique:users,email',
        ];

        if($this->route()->named('admin.user.update')){
            $rules['phone'] .= ',' . $this->route()->parameter('user')->id;
            $rules['email'] .= ',' . $this->route()->parameter('user')->id;
        }

        return $rules;
    }
}
