<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderDistributionResponsibilitiesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'OKUD' => [
                'string',
                'max:30',
                'required',
            ],
            'order_number' => [
                'numeric',
                'min:1',
                'required',
            ],
            'order_date' => [
                'required'
            ],
            'reason' => [
                'string',
                'max:255',
                'required',
            ],
            'responsibility1' => [
                'string',
                'max:255',
                'required',
            ],
            'responsibility2' => [
                'max:255',
            ],
            'responsibility3' => [
                'max:255',
            ],
        ];
    }
}
