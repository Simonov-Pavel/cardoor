<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    
    'active_url' => 'Поле :attribute не является допустимым URL-адресом',
    'after_or_equal' => 'Поле :attribute должен быть датой после или равной дате  :date.',
    'alpha' => 'Поле :attribute должен содержать только буквы',
    'alpha_dash' => 'Поле :attribute должен содержать только буквы, цифры, тире и знаки подчеркивания.',
    'alpha_num' => 'Поле :attribute должен содержать только буквы и цифры.',
    'array' => 'Поле :attribute должен быть масивом',
    'before' => 'Поле :attribute должен быть датой до даты :date.',
    'before_or_equal' => 'Поле :attribute должен быть датой, предшествующей или равной дате :date.',
    'between' => [
        'numeric' => 'Поле :attribute должен находиться в диапазоне от :min до :max.',
        'file' => 'Поле :attribute должен находиться в диапазоне от :min до :max килобайт.',
        'string' => 'Поле :attribute должен находиться в диапазоне от :min до :max символов.',
        'array' => 'Поле :attribute должен находиться в диапазоне от :min до :max значений.',
    ],
    'boolean' => 'Поле :attribute должно быть истинным или ложным',
    'current_password' => 'Пароль неверен',
    'date' => 'Поле :attribute не является допустимой датой',
    'date_equals' => 'Поле :attribute должен быть датой, равной :date.',
    'date_format' => 'Поле :attribute не соответствует формату :format.',
    'declined' => 'Поле :attribute должен быть отклонен',
    'declined_if' => 'Поле :attribute должен быть отклонен, если :other равно  :value.',
    'different' => 'Поле :attribute и :other должны быть разными',
    'digits_between' => 'Поле :attribute должен быть между цифрами :min и :max',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => 'Поле :attribute должен быть действительным адресом электронной почты',
    'ends_with' => 'Поле :attribute  должен заканчиваться одним из следующих значений: :values.',
    'exists' => 'Выбранный :attribute недопустим.',
    'file' => 'Поле :attribute должен быть файлом',
    'filled' => 'Поле :attribute должно иметь значение',
    'gt' => [
        'numeric' => 'Поле :attribute должен быть больше :value.',
        'file' => 'Поле :attribute должен быть больше :value килобайт.',
        'string' => 'Поле :attribute должен быть больше :value символов.',
        'array' => 'Поле :attribute должен быть больше :value значений.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute должен быть больше или равен :value.',
        'file' => 'Поле :attribute должен быть больше или равен :value килобайт',
        'string' => 'Поле :attribute должен быть больше или равен :value символов.',
        'array' => 'Поле :attribute должен содержать не менее :value значении',
    ],
    'image' => 'Поле :attribute должен быть изображением.',
    'in' => 'Выбранный :attribute не допустим',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Поле :attribute должен быть целым числом',
    'ip' => 'Поле :attribute должен быть действительным IP-адресом',
    'json' => 'Поле :attribute должен быть допустимой строкой JSON',
    'lt' => [
        'numeric' => 'Поле :attribute должен быть меньше  :value',
        'file' => 'Поле :attribute должен быть меньше  :value килобаит.',
        'string' => 'Поле :attribute должен быть меньше  :value символов.',
        'array' => 'Поле :attribute должен быть меньше  :value значений.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должен быть меньше или равен :value.',
        'file' => 'Поле :attribute должен быть меньше или равен :value килобайт.',
        'string' => 'Поле :attribute должен быть меньше или равен :value символов.',
        'array' => 'Поле :attribute не должно быть больше, чем :value значении.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не должен быть больше :max.',
        'file' => 'Поле :attribute не должен быть больше :max килобаит.',
        'string' => 'Поле :attribute не должен быть больше :max символов.',
        'array' => 'Поле :attribute не должно быть больше, чем :max значений',
    ],
    'mimes' => 'Поле :attribute должен быть файлом типа: :values.',
    'mimetypes' => 'Поле :attribute должен быть файлом типа: :values.',
    'min' => [
        'numeric' => 'Поле :attribute должен быть как минимум :min.',
        'file' => 'Поле :attribute должен быть как минимум :min килобаит.',
        'string' => 'Поле :attribute должен быть как минимум :min символов.',
        'array' => 'Поле :attribute должен содержать не менее :min элементов.',
    ],
    'multiple_of' => 'Поле :attribute должен быть кратен :value.',
    'not_in' => 'Выбранный :attribute не допустим',
    'not_regex' => 'Формат :attribute недопустим',
    'numeric' => 'Поле :attribute должен быть числом',
    'password' => 'Пароль неверен.',
    'present' => 'Поле :attribute должно присутствовать.',
    'prohibited' => 'Поле :attribute запрещено',
    'regex' => 'Формат :attribute недопустим',
    'required' => 'Это поле обязательно для заполнения',
    'same' => 'Поле :attribute и :other должны совпадать',
    'starts_with' => 'Поле :attribute  должен начинаться с одного из следующих значений: :values.',
    'string' => 'Поле :attribute должно быть строкой',
    'unique' => 'Поле :attribute должно быть уникальным, данное значение уже существует',
    'url' => 'Поле :attribute должен быть существующим URL.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
