<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'sports.*.*' => 'required',
        ];
    }

    /**
     * Provide the custom messages for incorrect data
     *
     * @return string[]
     */
    public function messages()
    {
        return [
            'sports.*.*.required' => 'Please choose the country',
        ];
    }
}
