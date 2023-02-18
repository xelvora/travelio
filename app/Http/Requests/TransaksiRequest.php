<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransaksiRequest extends FormRequest
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

    /**K
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tpackage_id' => ['required', 'string'],
            'username' => ['required', 'string'],
            'additional_visa' => ['required', 'string'],
            'transaction_total' => ['required', 'string'],
            'status' => ['required', 'string'],

        ];
    }
}
