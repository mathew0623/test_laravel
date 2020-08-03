<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return 'HOME';
    }

    public function help()
    {
        return 'HELP';
    }

    public function about()
    {
        return 'ABOUT';
    }
}