<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'body' => 'nullable|string|exists:bodies,slug',
            'class' => 'nullable|string|exists:class_cars,slug',
            'startRent' => 'nullable|date|after:today',
            'endRent' => 'nullable|date|after:startRent',
        ];
    }

    public function messages()
    {
        return [
            'startRent.date' => 'Необходим формат даты - дд.мм.гггг',
            'endRent.date' => 'Необходим формат даты - дд.мм.гггг',
            'startRent.after' => 'дата должна быть не ранее завтрешней',
            'endRent.after' => 'дата должна быть не ранее даты начала аренды',
        ];
    }
}
