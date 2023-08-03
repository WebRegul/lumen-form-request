<?php

namespace Illuminate\Foundation\Http;

/**
 * @deprecated 2.0.6
 */
trait ValidationMessagesTrait
{

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    protected array $baseMessages = [
        //'required' => 'поле :attribute обязательно для заполнения',
        //'required' => trans('validation.required'),
        // 'in' => 'поле :attribute может иметь только значения: :values',
        // 'alpha_dash' => 'для поля :attribute допустимы только цифры, символы латиницы, дефиса и подчеркивания',
        // 'min' => 'минимальное количество символов для поля :attribute равно :min',
        // 'max' => 'максимальное количество символов для поля :attribute равно :max',
        // 'prohibited_unless' => 'поле :attribute допустимо только для :other равного: :values',
        // 'required_if' => 'поле :attribute обязательно если :other: :value',
        // 'between' => 'для поля :attribute допустимы значения от :min до :max',
        // 'numeric' => 'поле :attribute должно быть числом',
        // 'integer' => 'поле :attribute должно быть целым числом'
    ];


    /**
     * Оставлено для совместимости. Все стандартные тексты уходят в локализацию
     * @deprecated 2.0.6
     *
     * @return array
     */
    public function messages(): array
    {
        if (property_exists(static::class, 'disableDefaultRules')) {
            return [];
        }
        $custom = (property_exists(static::class, 'messages')) ? static::$messages : [];
        return array_merge($this->baseMessages, $custom);
    }
}
