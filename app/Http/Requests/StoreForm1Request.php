<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Services\DocsService;

class StoreForm1Request extends FormRequest
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
                'integer',
                'min:1',
                'max:999999'
                ],
            'place' => [
                'required',
                'string',
                'max:255',
            ],
            'provider_org_full_name' => [
                'required',
                'string',
                'max:255',
            ],
            'provider_org_employee_fio' => [
                'required',
                'string',
                'max:255',
            ],
            'provider_org_employee_position' => [
                'required',
                'string',
                'max:255',
            ],
            'provider_doc_name' => [
                'required',
                'string',
                'max:255',
            ],
            'customer_org_full_name' => [
                'required',
                'string',
                'max:255',
            ],
            'customer_org_employee_fio' => [
                'required',
                'string',
                'max:255',
            ],
            'customer_org_employee_position' => [
                'required',
                'string',
                'max:255',
            ],
            'product' => [
                'required',
                'string',
                'max:255',
            ],
            'purpose_acquisition' => [
                'required',
                'string',
                'max:255',
            ],
            'full_price_rub' => [
                'required',
                'min:0',
                'integer'
            ],
            'customer_doc_name' => [
                'required',
                'string',
                'max:255',
            ],
            'full_price_kop' => [
                'required',
                'min:0',
                'max:99',
                'integer'
            ],
            'vat' => [
                'required',
                'min:1',
                'max:99',
                'integer'
            ],
            'vat_price_rub' => [
                'required',
                'min:0',
                'integer'
            ],
            'vat_price_kop' => [
                'required',
                'min:0',
                'max:99',
                'integer'
            ],
            'fin_source' => [
                'required',
                'string',
                'max:255',
            ],
            'delivery' => [
                'required',
                'string',
                'max:255',
            ],
            'fix_days' => [
                'required',
                'min:1',
                'integer'
            ],
            'force_majeure_days' => [
                'required',
                'min:1',
                'integer'
            ],
            'change_days' => [
                'required',
                'min:1',
                'integer'
            ],
            'additional_info' => [
                'required',
                'string',
                'max:1000',
            ],
            'provider_tel' => [
                'required',
                'string',
                'regex:' . DocsService::TEL_REGEX,
            ],
            'provider_fax' => [
                'required',
                'string',
                'regex:' . DocsService::TEL_REGEX,
            ],
            'provider_date' => [
                'required',
                'date'
            ],
            'customer_tel' => [
                'required',
                'string',
                'regex:' . DocsService::TEL_REGEX,
            ],
            'customer_fax' => [
                'required',
                'string',
                'regex:' . DocsService::TEL_REGEX,
            ],
            'customer_date' => [
                'required',
                'date'
            ],
        ];
    }
}
