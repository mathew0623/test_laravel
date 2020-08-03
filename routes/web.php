<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class StaticPagesController extends Controller

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
