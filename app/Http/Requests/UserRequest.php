<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255|regex:/^[A-Za-zÀ-ÿ\s]+$/u',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'city' => 'required|string',
        ];
    }

    public function messages() 
    {
        return[
            'name.required' => 'O campo nome é obrigatório.',
            'name.regex' => 'O nome deve conter apenas letras.',
            'name.max' => 'O nome não pode ter mais que 255 caracteres.',
    
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Informe um endereço de e-mail válido.',
            'email.unique' => 'Este e-mail já está cadastrado.',
    
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
    
            'city.required' => 'O campo cidade é obrigatório.',
            'city.string' => 'A cidade deve ser uma string válida.',
        ];
    }
}
