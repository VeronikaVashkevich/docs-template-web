<?php


namespace App\Http\Controllers;


use App\Http\Requests\AuthorContractDesignerRequest;
use App\Http\Requests\MarriageContractRequest;
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
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

    public function createMarriageContract()
    {
        return view('templates.marriage-contract');
    }

    public function addMarriageContract(MarriageContractRequest $request)
    {
        $validated = $request->validated();
        $docService = new DocsService();

        if (!$docService->saveMarriageContract($validated)) {
            return redirect('/create/marriage-contract');
        }
        $docService->setMarriageContractValues($validated);

        return response()->download('marriage-contract.docx')->deleteFileAfterSend(true);
    }

    public function createAuthorContractDesigner()
    {
        return view('templates.author-contract-designer');
    }

    public function addAuthorContractDesigner(AuthorContractDesignerRequest $request)
    {
        $validated = $request->validated();
        $docsService = new DocsService();

        if (!$docsService->saveAuthorContractDesigner($validated)) {
            return redirect('/create/author-contract-designer');
        }
        $docsService->setAuthorContractDesignerValues($validated);

        return response()->download('author-contract-designer.docx')->deleteFileAfterSend(true);

    }
}
