<?php


namespace App\Http\Controllers;




use App\Http\Requests\StoreForm1Request;
use App\Services\DocsService;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function templates($template)
    {
        $class = DocsService::getTemplateClass($template);
        $docs = $class::all();

        return view('templates', compact('docs'));
    }

}
