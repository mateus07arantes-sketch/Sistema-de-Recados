<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // mudei para true - autoriza a request
    }

    /**
     * Get the validation rules that apply to the request. - Regras de validação da request
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'         => 'required|string|max:255',
            'description'   => 'nullable|string',
            'made_at'       => 'required|date_format:Y-m-d\TH:i',
            'urgency'       => 'required|boolean',
        ];
    }

    // Mensagens das verificações - criar recados
    public function messages() 
    {
        return[
            'title.required'        => 'O título é obrigatório',
            'title.string'          => 'O título deve ser uma sequência de caracteres.',
            'title.max'             => 'O título deve conter no máximo 255 caracteres.',
            'description.string'    => 'A descrição deve ser uma sequência de caracteres.',
            'made_at.required'      => 'A data e a hora são obrigatórias.',
            'made_at.date_format'   => 'A data e a hora devem seguir o formato correto: AAAA-MM-DDthh:mm.',
            'urgency.boolean'       => 'O campo deve ser entendido como verdadeiro ou falso.',
        ];
    }
}
