<?php

namespace Iboldurev\Settings\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'key' => 'required|unique:settings,key',
            'value' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'key.unique' => 'The key is already used',
            'value.unique' => 'The value is required',
        ];
    }
}
