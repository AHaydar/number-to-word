<?php

namespace App\Controllers;
use App\Core\App;

class ConverterController
{
    public function home()
    {
        return view('index');
    }

    public function convert()
    {
        $language = $_POST['language'];
        $f = new \NumberFormatter($language, \NumberFormatter::SPELLOUT);
        $number = $_POST['number'];
        $word = $f->format($_POST['number']);

        App::bind($_POST['number'], $word);

        return view('index', compact(['word', 'number', 'language']));
    }
}