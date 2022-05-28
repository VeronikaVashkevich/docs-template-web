<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreForm1Request;
use App\Services\DocsService;

class DocsController extends Controller
{
    public function createForm1()
    {
        return view('templates.form1');
    }

    /**
     * @param StoreForm1Request $request
     * @throws \PhpOffice\PhpWord\Exception\CopyFileException
     * @throws \PhpOffice\PhpWord\Exception\CreateTemporaryFileException
     */
    public function addForm1(StoreForm1Request $request)
    {
        $validated = $request->validated();
        $docService = new DocsService();

        if (!$docService->saveForm1Doc($validated)) {
            return redirect('/create/form-1');
        }
        $docService->setForm1Values($validated);

        return response()->download('form1-template.docx')->deleteFileAfterSend(true);
    }
}
