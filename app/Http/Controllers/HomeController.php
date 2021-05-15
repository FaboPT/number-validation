<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * @return
     */
    public function index(): View
    {
        $items = [];
        return view('home', compact('items'));
    }
}
