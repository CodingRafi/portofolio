<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowWebController extends Controller
{
    public function index(){
        return Inertia::render('ShowUser/Index');
    }

    public function about(){
        return Inertia::render('ShowUser/About');
    }

    public function skills(){
        return Inertia::render('ShowUser/Skills');
    }

    public function appreciation(){
        return Inertia::render('ShowUser/Appreciation');
    }

    public function project(){
        return Inertia::render('ShowUser/Project');
    }

    public function contact(){
        return Inertia::render('ShowUser/Contact');
    }
}
