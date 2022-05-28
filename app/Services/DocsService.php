<?php


namespace App\Services;


use PhpOffice\PhpWord\PhpWord;

class DocsService
{
    const TEL_REGEX = '/^[0-9]{7}$/';

    public function createForm1Text($validated)
    {
        $phpWord = new PhpWord();


    }
}
