<?php


namespace App\Http\Controllers;




use App\Http\Requests\StoreForm1Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    /**
     * @param StoreForm1Request $request
     * @throws \PhpOffice\PhpWord\Exception\CopyFileException
     * @throws \PhpOffice\PhpWord\Exception\CreateTemporaryFileException
     */
    public function addDocument(StoreForm1Request $request)
    {
        $validated = $request->validated();

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

        return response()->download('form1-template.docx')->deleteFileAfterSend(true);
    }
}
