<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UsersFormRequest extends FormRequest
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
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => [Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised()],
            'password_confirmation' => ['same:password'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => "O campo Nome é obrigatório.",
            'email.email' => "O campo E-mail é obrigatório e deve ser um endereço de e-mail válido.",
            'password.required' => "O campo Senha é obrigatório.",
            'password.min' => "O campo Senha deve ter pelo menos :min caracteres",
            'password.mixed' => "O campo Senha deve conter pelo menos uma letra maiúscula e uma letra minúscula.",
            'password.numbers' => "O campo Senha deve conter pelo menos um número.",
            'password.symbols' => "O campo Senha deve conter pelo menos um símbolo (caracter especial).",
            'password.uncompromised' => 'A Senha que você inseriu está em um vazamento de dados. Por favor escolha uma senha diferente.',
            'password_confirmation.same' => "O campo Confirmação de Senha deve ser identico ao campo Senha.",
        ];
    }
}
