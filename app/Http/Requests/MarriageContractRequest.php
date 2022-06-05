<?php

namespace App\Http\Requests;

use App\Services\DocsService;
use Illuminate\Foundation\Http\FormRequest;

class MarriageContractRequest extends FormRequest
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
            'date' => [
                'required',
                'date',
            ],
            'husband' => [
                'required',
                'string',
                'max:255',
            ],
            'wife' => [
                'required',
                'string',
                'max:255',
            ],
            'husband_name' => [
                'required',
                'string',
                'max:255',
            ],
            'husband_flat' => [
                'required',
                'numeric',
                'min:1',
            ],
            'husband_flat_address' => [
                'required',
                'string',
                'max:400',
            ],
            'husband_car_model' => [
                'required',
                'string',
                'max:255',
            ],
            'husband_car_engine_number' => [
                'required',
                'string',
                'max:10',
            ],
            'husband_car_engine_body' => [
                'required',
                'numeric',
                'min:1',
            ],
            'husband_car_register' => [
                'required',
                'string',
                'max:100',
            ],
            'husband_garage' => [
                'max:100',
            ],
            'wife_name' => [
                'required',
                'string',
                'max:255',
            ],
            'wife_property_1' => [
                'required',
                'string',
                'max:255',
            ],
            'wife_property_2' => [
                'max:255',
            ],
            'wife_property_3' => [
                'max:255',
            ],
            'wife_property_4' => [
                'max:255',
            ],
            'sum' => [
                'required',
                'numeric',
                'min: 0.01',
            ],
            'husband_passport_series' => [
                'required',
                'string',
                'min:2',
                'max:2',
            ],
            'husband_passport_number' => [
                'required',
                'numeric',
                'regex:' . DocsService::PASSPORT_NUMBER_REGEX,
            ],
            'husband_issued' => [
                'required',
                'string',
                'max:255',
            ],
            'husband_issued_address' => [
                'required',
                'string',
                'max:255',
            ],
            'wife_passport_series' => [
                'required',
                'string',
                'min:2',
                'max:2',
            ],
            'wife_passport_number' => [
                'required',
                'numeric',
                'regex:' . DocsService::PASSPORT_NUMBER_REGEX,
            ],
            'wife_issued' => [
                'required',
                'string',
                'max:255',
            ],
            'wife_issued_address' => [
                'required',
                'string',
                'max:255',
            ],
        ];
    }
}
