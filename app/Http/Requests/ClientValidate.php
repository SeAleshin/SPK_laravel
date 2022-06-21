<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientValidate extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'email' => 'required|min:6',
            'tel' => 'required|min:10|max:12',
            'body' => '',
            'status' => '',
        ];
    }
}
