<?php


namespace App\Services;


use App\Models\Form1Template;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;

class DocsService
{
    const TEL_REGEX = '/^[0-9]{7}$/';

    /**
     * @param $validated
     * @throws \PhpOffice\PhpWord\Exception\CopyFileException
     * @throws \PhpOffice\PhpWord\Exception\CreateTemporaryFileException
     */
    public function setForm1Values($validated)
    {
        $templateProcessor = new TemplateProcessor('word-templates/form1.docx');

        $templateProcessor->setValue('number', $validated['number']);
        $templateProcessor->setValue('place', $validated['place']);
        $templateProcessor->setValue('provider_org_full_name', $validated['provider_org_full_name']);
        $templateProcessor->setValue('provider_org_employee_fio', $validated['provider_org_employee_fio']);
        $templateProcessor->setValue('provider_org_employee_position', $validated['provider_org_employee_position']);
        $templateProcessor->setValue('provider_doc_name', $validated['provider_doc_name']);
        $templateProcessor->setValue('customer_org_full_name', $validated['customer_org_full_name']);
        $templateProcessor->setValue('customer_org_employee_fio', $validated['customer_org_employee_fio']);
        $templateProcessor->setValue('customer_org_employee_position', $validated['customer_org_employee_position']);
        $templateProcessor->setValue('customer_doc_name', $validated['customer_doc_name']);
        $templateProcessor->setValue('product', $validated['product']);
        $templateProcessor->setValue('purpose_acquisition', $validated['purpose_acquisition']);
        $templateProcessor->setValue('fin_source', $validated['fin_source']);
        $templateProcessor->setValue('full_price_rub', $validated['full_price_rub']);
        $templateProcessor->setValue('full_price_kop', $validated['full_price_kop']);
        $templateProcessor->setValue('vat', $validated['vat']);
        $templateProcessor->setValue('vat_price_rub', $validated['vat_price_rub']);
        $templateProcessor->setValue('vat_price_kop', $validated['vat_price_kop']);
        $templateProcessor->setValue('delivery', $validated['delivery']);
        $templateProcessor->setValue('fix_days', $validated['fix_days']);
        $templateProcessor->setValue('force_majeure_days', $validated['force_majeure_days']);
        $templateProcessor->setValue('change_days', $validated['change_days']);
        $templateProcessor->setValue('additional_info', $validated['additional_info']);
        $templateProcessor->setValue('provider_tel', $validated['provider_tel']);
        $templateProcessor->setValue('provider_fax', $validated['provider_fax']);
        $templateProcessor->setValue('provider_date', $validated['provider_date']);
        $templateProcessor->setValue('customer_tel', $validated['customer_tel']);
        $templateProcessor->setValue('customer_fax', $validated['customer_fax']);
        $templateProcessor->setValue('customer_date', $validated['customer_date']);

        $templateProcessor->saveAs('form1-template.docx');
    }

    /**
     * @param $validated
     * @return bool
     */
    public function saveForm1Doc($validated)
    {
        $form1 = new Form1Template;

        $form1->number = $validated['number'];
        $form1->place = $validated['place'];
        $form1->provider_org_full_name = $validated['provider_org_full_name'];
        $form1->provider_org_employee_fio = $validated['provider_org_employee_fio'];
        $form1->provider_org_employee_position = $validated['provider_org_employee_position'];
        $form1->provider_doc_name = $validated['provider_doc_name'];
        $form1->customer_org_full_name = $validated['customer_org_full_name'];
        $form1->customer_org_employee_fio = $validated['customer_org_employee_fio'];
        $form1->customer_org_employee_position = $validated['customer_org_employee_position'];
        $form1->customer_doc_name = $validated['customer_doc_name'];
        $form1->product = $validated['product'];
        $form1->purpose_acquisition = $validated['purpose_acquisition'];
        $form1->full_price_rub = $validated['full_price_rub'];
        $form1->full_price_kop = $validated['full_price_kop'];
        $form1->vat = $validated['vat'];
        $form1->vat_price_rub = $validated['vat_price_rub'];
        $form1->vat_price_kop = $validated['vat_price_kop'];
        $form1->fin_source = $validated['fin_source'];
        $form1->delivery = $validated['delivery'];
        $form1->fix_days = $validated['fix_days'];
        $form1->force_majeure_days = $validated['force_majeure_days'];
        $form1->change_days = $validated['change_days'];
        $form1->provider_tel = $validated['provider_tel'];
        $form1->provider_fax = $validated['provider_fax'];
        $form1->provider_date = $validated['provider_date'];
        $form1->customer_tel = $validated['customer_tel'];
        $form1->customer_fax = $validated['customer_fax'];
        $form1->customer_date = $validated['customer_date'];
        $form1->additional_info = $validated['additional_info'];

        $form1->save();

        return true;
    }
}
