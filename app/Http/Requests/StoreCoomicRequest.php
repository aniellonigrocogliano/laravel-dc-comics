<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoomicRequest extends FormRequest
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
            'title' => ['required', 'min:3'],
            'type' => ['required'],
            'price' => ['required'],
            'thumb' => ['required'],
            'sale_date' => ['required'],
            'series' => ['required'],
            'description' => ['required', 'date']
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo non può essere vuoto',
            'title.min' => 'Il titolo deve essere almeno di 3 caratteri'
        ];
    }
}
