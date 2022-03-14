<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function entries(){
        $entries = array(
            'title' => 'Entries',
            'entries' => ['Entry1', 'Entry2', 'Entry3']
        );
        return view('pages.entries')->with($entries);
    }
}
