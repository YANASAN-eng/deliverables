<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    // ホーム画面表示
    public function showHome()
    {
        return view('home');
    }
}
