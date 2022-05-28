<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form1Template extends BasicTemplate
{
    use HasFactory;

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->mergeFillable([
            'number',
            'place',
            'provider_org_full_name',
            'provider_org_employee_fio',
            'provider_org_employee_position',
            'provider_doc_name',
            'customer_org_full_name',
            'customer_org_employee_fio',
            'customer_org_employee_position',
            'customer_doc_name',
            'product',
            'purpose_acquisition',
            'full_price_rub',
            'full_price_kop',
            'vat',
            'vat_price_rub',
            'vat_price_kop',
            'fin_source',
            'delivery',
            'fix_days',
            'force_majeure_days',
            'change_days',
            'provider_tel',
            'provider_fax',
            'provider_date',
            'customer_tel',
            'customer_fax',
            'customer_date',
            'additional_info',
        ]);
    }
}
