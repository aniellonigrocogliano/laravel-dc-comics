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
            'type' => ['required', 'min:3'],
            'price' => ['required', 'decimal:2'],
            'thumb' => ['required', 'url'],
            'sale_date' => ['required', 'date'],
            'series' => ['required', 'min:3'],
            'description' => ['required', 'min:10']
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo non può essere vuoto',
            'title.min' => 'Il titolo deve essere almeno di 3 caratteri',
            'type.required' => 'Il tipo di fumetto è richiesto',
            'type.min' => 'Il tipo di fumetto deve essere almeno di 3 caratteri',
            'price.required' => 'Il prezzo di vendita è richiesto',
            'price.decimal' => 'Il prezzo di vendita deve essere un numero tipo 10.00',
            'thumb.required' => 'Url dell\'immagine è obligatorio',
            'thumb.url' => 'Url dell\'immagine deve essere valido',
            'thumb.required' => 'Url dell\'immagine è obligatorio',
            'sale_date.required' => 'La data di vendita è obbligatoria',
            'sale_date.date' => 'La data di vendita deve essere una data valida',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve essere almeno di 3 caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve essere almeno di 10 caratteri'

        ];
    }
}
