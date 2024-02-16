<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        return \view('frontend.home.index');
    }

    public function contact(): View
    {
        return \view('frontend.home.contact');
    }
}
