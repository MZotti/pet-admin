<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'min:2'],
            'especie' => ['required', 'regex:(C|G)'] 
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo ":attribute" é obrigatório.',
            'nome.min'  => 'O campo ":attribute" precisa no mínimo de 2 caracteres.',
            'especie.required'  => 'O campo ":attribute" é obrigatório.',
            'especie.regex'  => 'O campo ":attribute" deve possuir o valor "C" ou "G".',
        ];
    }
}
