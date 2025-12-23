<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View
    {
        // languages each person speaks
        $person_languages = [
            'John' => ['Portuguese', 'English'],
            'Jane' => ['Portuguese', 'Spanish'],
            'Anne' => ['Portuguese', 'English', 'French'],
        ];

        return view('home', compact('person_languages'));
    }
}
