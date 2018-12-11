<?php

namespace Iboldurev\Settings\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required',
            'key' => 'required|unique:settings,key,' . $this->id,
            'value' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'key.required' => 'The key is required',
            'key.unique' => 'The key is already used',
            'value.unique' => 'The value is required',
        ];
    }
}
