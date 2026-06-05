<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Render the CapStation landing page for the active locale.
     */
    public function index()
    {
        return view('pages.home');
    }
}
