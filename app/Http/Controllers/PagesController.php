<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $myName = 'Daniil Nerydaev';
        return view('pages.about', ['myName' => $myName]);
    }
}
