<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class SendContactMessageRequest
 * @package App\Http\Requests
 */
class SendContactMessageRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|min:2|max:255',
            'phone' => 'required|string|min:7|max:255',
            'message' => 'required|string|min:2|max:2000',
        ];
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [
            'name' => $this->input('name'),
            'email' => $this->input('email'),
            'phone' => $this->input('phone'),
            'message' => $this->input('message'),
        ];
    }
}
