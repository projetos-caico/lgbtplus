<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendContact extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ];
    }

    public function messages () {
        return [
            'name.required' => 'É necessário informar o nome.',
            'email.required' => 'É necessário informar o email.',
            'email.email' => 'Você não informou um email válido.',
            'phone.required' => 'É necessário informar o telefone.',
            'message.required' => 'É necessário ter uma mensagem.',
        ];
    }
}
