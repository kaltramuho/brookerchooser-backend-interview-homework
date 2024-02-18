<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $variant = session('assigned_variant', 'none');
        return view('test.index', compact('variant'));
    }
}
