<?php


namespace App\Services;


use App\Models\AuthorContractDesigner;
use App\Models\Form1Template;
use App\Models\MarriageContract;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;

class DocsService
{
    const TEL_REGEX = '/^[0-9]{7}$/';
    const PASSPORT_NUMBER_REGEX = '/^[0-9]{7}$/';
    const TEMPLATES = [
        'form1' => Form1Template::class,
        'marriageContract' => MarriageContract::class,
        'authorContractDesigner' => AuthorContractDesigner::class,
    ];

    public static function getTemplateClass($templateName)
    {
        return self::TEMPLATES[$templateName];
    }

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

    public function saveMarriageContract($validated)
    {
        $marriageContract = new MarriageContract;

        $marriageContract->date = $validated['date'];
        $marriageContract->husband = $validated['husband'];
        $marriageContract->wife = $validated['wife'];
        $marriageContract->husband_name = $validated['husband_name'];
        $marriageContract->husband_flat = $validated['husband_flat'];
        $marriageContract->husband_flat_address = $validated['husband_flat_address'];
        $marriageContract->husband_car_model = $validated['husband_car_model'];
        $marriageContract->husband_car_engine_number = $validated['husband_car_engine_number'];
        $marriageContract->husband_car_engine_body = $validated['husband_car_engine_body'];
        $marriageContract->husband_car_register = $validated['husband_car_register'];
        $marriageContract->husband_garage = $validated['husband_garage'];
        $marriageContract->wife_name = $validated['wife_name'];
        $marriageContract->wife_property_1 = $validated['wife_property_1'];
        $marriageContract->wife_property_2 = $validated['wife_property_2'];
        $marriageContract->wife_property_3 = $validated['wife_property_3'];
        $marriageContract->wife_property_4 = $validated['wife_property_4'];
        $marriageContract->sum = $validated['sum'];
        $marriageContract->husband_passport_series = $validated['husband_passport_series'];
        $marriageContract->husband_passport_number = $validated['husband_passport_number'];
        $marriageContract->husband_issued = $validated['husband_issued'];
        $marriageContract->husband_issued_address = $validated['husband_issued_address'];
        $marriageContract->wife_passport_series = $validated['wife_passport_series'];
        $marriageContract->wife_passport_number = $validated['wife_passport_number'];
        $marriageContract->wife_issued = $validated['wife_issued'];
        $marriageContract->wife_issued_address = $validated['wife_issued_address'];

        $marriageContract->save();

        return true;
    }

    public function setMarriageContractValues($validated)
    {
        $templateProcessor = new TemplateProcessor('word-templates/marriage-contract.docx');

        $templateProcessor->setValue('date', $validated['date']);
        $templateProcessor->setValue('year', date('Y', strtotime($validated['date'])));
        $templateProcessor->setValue('husband', $validated['husband']);
        $templateProcessor->setValue('wife', $validated['wife']);
        $templateProcessor->setValue('husband_name', $validated['husband_name']);
        $templateProcessor->setValue('husband_flat', $validated['husband_flat']);
        $templateProcessor->setValue('husband_flat_address', $validated['husband_flat_address']);
        $templateProcessor->setValue('husband_car_model', $validated['husband_car_model']);
        $templateProcessor->setValue('husband_car_engine_number', $validated['husband_car_engine_number']);
        $templateProcessor->setValue('husband_car_engine_body', $validated['husband_car_engine_body']);
        $templateProcessor->setValue('husband_car_register', $validated['husband_car_register']);
        $templateProcessor->setValue('husband_garage', $validated['husband_garage']);
        $templateProcessor->setValue('wife_name', $validated['wife_name']);
        $templateProcessor->setValue('wife_property_1', $validated['wife_property_1']);
        $templateProcessor->setValue('wife_property_2', $validated['wife_property_2']);
        $templateProcessor->setValue('wife_property_3', $validated['wife_property_3']);
        $templateProcessor->setValue('wife_property_4', $validated['wife_property_4']);
        $templateProcessor->setValue('sum', $validated['sum']);
        $templateProcessor->setValue('husband_passport_series', $validated['husband_passport_series']);
        $templateProcessor->setValue('husband_passport_number', $validated['husband_passport_number']);
        $templateProcessor->setValue('husband_issued', $validated['husband_issued']);
        $templateProcessor->setValue('husband_issued_address', $validated['husband_issued_address']);
        $templateProcessor->setValue('wife_passport_series', $validated['wife_passport_series']);
        $templateProcessor->setValue('wife_passport_number', $validated['wife_passport_number']);
        $templateProcessor->setValue('wife_issued', $validated['wife_issued']);
        $templateProcessor->setValue('wife_issued_address', $validated['wife_issued_address']);

        $templateProcessor->saveAs('marriage-contract.docx');
    }

    public function saveAuthorContractDesigner($validated)
    {
        $authorContractDesigner = new AuthorContractDesigner;

        $authorContractDesigner->number = $validated['number'];
        $authorContractDesigner->date = $validated['date'];
        $authorContractDesigner->customer = $validated['customer'];
        $authorContractDesigner->customer_repr = $validated['customer_repr'];
        $authorContractDesigner->designer = $validated['designer'];
        $authorContractDesigner->images = $validated['images'];
        $authorContractDesigner->territory = $validated['territory'];
        $authorContractDesigner->time = $validated['time'];
        $authorContractDesigner->reward = $validated['reward'];
        $authorContractDesigner->contract_days = $validated['contract_days'];
        $authorContractDesigner->customer_address = $validated['customer_address'];
        $authorContractDesigner->customer_pay = $validated['customer_pay'];
        $authorContractDesigner->customer_tel = $validated['customer_tel'];
        $authorContractDesigner->designer_address = $validated['designer_address'];
        $authorContractDesigner->designer_passport = $validated['designer_passport'];
        $authorContractDesigner->designer_phone = $validated['designer_phone'];
        $authorContractDesigner->tax_data = $validated['tax_data'];

        $authorContractDesigner->save();

        return true;
    }

    public function setAuthorContractDesignerValues($validated)
    {
        $templateProcessor = new TemplateProcessor('word-templates/author-contract-designer.docx');

        $templateProcessor->setValue('number', $validated['number']);
        $templateProcessor->setValue('date', $validated['date']);
        $templateProcessor->setValue('year', date('Y', strtotime($validated['date'])));
        $templateProcessor->setValue('customer', $validated['customer']);
        $templateProcessor->setValue('customer_repr', $validated['customer_repr']);
        $templateProcessor->setValue('designer', $validated['designer']);
        $templateProcessor->setValue('images', $validated['images']);
        $templateProcessor->setValue('territory', $validated['territory']);
        $templateProcessor->setValue('time', $validated['time']);
        $templateProcessor->setValue('reward', $validated['reward']);
        $templateProcessor->setValue('contract_days', $validated['contract_days']);
        $templateProcessor->setValue('customer_address', $validated['customer_address']);
        $templateProcessor->setValue('customer_pay', $validated['customer_pay']);
        $templateProcessor->setValue('customer_tel', $validated['customer_tel']);
        $templateProcessor->setValue('designer_address', $validated['designer_address']);
        $templateProcessor->setValue('designer_passport', $validated['designer_passport']);
        $templateProcessor->setValue('designer_phone', $validated['designer_phone']);
        $templateProcessor->setValue('tax_data', $validated['tax_data']);

        $templateProcessor->saveAs('author-contract-designer.docx');
    }
}
