<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index() {
        return Inertia::render('Home/Index');
    }

    public function about() {
        return Inertia::render('Home/About');
    }

}
