<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function getIndex()
    {
        return view('landing_page.landingpage');
    }

    public function getTerm()
    {
        return view('term.term');
    }

    public function getPrivacy()
    {
        return view('privacy.privacy');
    }
}
