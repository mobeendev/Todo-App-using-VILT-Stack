<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\Todo;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return Inertia::render('Home', [
            'todos' => Todo::latest()->get(),
        ]);
    }

}
