<?php

namespace App\Http\Requests;

use App\Services\DocsService;
use Illuminate\Foundation\Http\FormRequest;

class AuthorContractDesignerRequest extends FormRequest
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
            'number' => [
                'required',
                'numeric',
                'min:1',
            ],
            'date' => [
                 'required',
            ],
            'customer' => [
                'required',
                'string',
                'max:255',
            ],
            'customer_repr' => [
                'required',
                'string',
                'max:255',
            ],
            'designer' => [
                'required',
                'string',
                'max:255',
            ],
            'images' => [
                'required',
                'string',
                'max:255',
            ],
            'territory' => [
                'required',
                'string',
                'max:255',
            ],
            'time' => [
                'required',
                'numeric',
                'min:1'
            ],
            'reward' => [
                'required',
                'numeric',
                'min:0.01'
            ],
            'contract_days' => [
                'required',
                'numeric',
                'min:1'
            ],
            'customer_address' => [
                'required',
                'string',
                'max:255',
            ],
            'customer_pay' => [
                'required',
                'string',
                'max:255',
            ],
            'customer_tel' => [
                'required',
                'string',
                'regex:' . DocsService::TEL_REGEX,
            ],
            'designer_address' => [
                'required',
                'string',
                'max:255',
            ],
            'designer_passport' => [
                'required',
                'string',
                'max:255',
            ],
            'designer_phone' => [
                'required',
                'string',
                'regex:' . DocsService::TEL_REGEX,
            ],
            'tax_data' => [
                'required',
                'string',
                'max:255',
            ],
        ];
    }
}
