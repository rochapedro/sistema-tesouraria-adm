<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class AdministrativeCodeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
      
        $rules = [
            'description' => ['required', 'string', 'max:50', 'regex:/^[^\s]+$/'],
        ];
    
        // Verifica se é uma atualização (tem um objeto 'administrative-code' na rota)
        if ($this->route()->hasParameter('administrative-code')) {
            $vehicleId = $this->route('administrative-code')->id;
            // Ignora a verificação de unicidade para o registro atual
            $rules['plate'][] = Rule::unique('administrative-codes')->ignore($vehicleId);
        } else {
            // Caso contrário, é uma criação, aplica a regra de unicidade normalmente
            $rules['plate'][] = 'unique:administrative_codes';
        }
    
        return $rules;
    }

    
    public function messages()
    {
        return [
            'description.required' => 'A descrição é obrigatória.',
            'description.string'   => 'A descrição deve ser do tipo texto.',
            'description.max'      => 'A descrição deve conter no máximo 50 caracteres.',
            'description.regex'    => 'A descrição não deve conter espaços em branco.',
            'description.unique'   => 'Descrição já atribuida a outro registro.'
        ];
    }

}
