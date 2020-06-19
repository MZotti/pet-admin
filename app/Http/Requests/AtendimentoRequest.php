<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtendimentoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pet_id' => ['required', 'exists:pets,id'],
            'data_atendimento' => ['required', 'date', 'after:yesterday']
        ];
    }

    public function messages()
    {
        return [
            'pet_id.required' => 'O campo ":attribute" é obrigatório.',
            'pet_id.exists' => 'O ID do pet informado não existe.',
            'data_atendimento.required'  => 'O campo ":attribute" é obrigatório.',
            'data_atendimento.date'  => 'O campo ":attribute" precisa estar no formato: Y-m-d.',
            'data_atendimento.after'  => 'O campo ":attribute" precisa ser maior ou igual à data de hoje.',
        ];
    }
}
