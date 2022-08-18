<?php

namespace Illuminate\Foundation\Http;

trait ValidationMessagesTrait
{

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    protected array $baseMessages = [
        'required' => 'поле :attribute обязательно для заполнения',
        'in' => 'поле :attribute можем иметь только значения: :values',
        'alpha_dash' => 'для поля :attribute допустимы только цифры, символы латиницы, дефиса и подчеркивания',
        'min' => 'минимальное количество символов для поля :attribute равно :min',
        'max' => 'максимальное количество символов для поля :attribute равно :max',
    ];

    public function messages(): array
    {
        if(property_exists(static::class, 'disableDefaultRules')){
            return [];
        }
        $custom = (property_exists(static::class, 'messages')) ? static::$messages : [];
        return array_merge($this->baseMessages, $custom);
    }

}
