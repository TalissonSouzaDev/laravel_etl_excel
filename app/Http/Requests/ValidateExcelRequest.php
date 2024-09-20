<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateExcelRequest extends FormRequest
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
            'upload' => 'required|file|mimes:xlsx,xls,csv|max:2048', // limita o tamanho do arquivo a 2MB
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'upload.required' => 'Por favor, selecione um arquivo para o upload.',
            'upload.file' => 'O arquivo enviado não é válido.',
            'upload.mimes' => 'Apenas arquivos Excel são permitidos (xlsx, xls ou csv).',
            'upload.max' => 'O arquivo enviado não pode ter mais que 2MB.',
        ];
    }
}
