<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|min:4|max:20',
            'email' => 'required|email|min:4|max:30',
            'subject' => 'required|min:4|max:30',
            'message' => 'required|min:4|max:200',
        ];
    }

    public function attributes() // change field name for error
    {
        return [
            'name' => 'Your name',
        ];
    }

    public function messages() // change text message for field error
    {
        return [
            'name' => 'Поле имя - обязательное',
        ];
    }
}
