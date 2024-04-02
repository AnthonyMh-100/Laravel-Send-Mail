<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestContact extends FormRequest
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
            'email' => 'required|string',
            'subject' => 'required|string',
            'title' => 'required|string',
            'comment' => 'required|string',
            
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'El campo email es obligatorio.',
            'subject.required' => 'El campo asunto es obligatorio.',
            'title.required' => 'El campo titulo es obligatorio.',
            'comment.required' => 'El campo comentario es obligatorio.',
            
        ];
    }
}
