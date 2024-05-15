<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'students_DNI' => 'required|string|max:50|unique:products,code',
            'name' => 'required|string|max:250',
            'last_name' => 'required|string|max:250',
            'date_of_birth' => 'required|date'
        ];
    }
}