<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Kanat Kozhakhmet',
            'course' => '4',
            'year' => 2026
        ];

        return view('info', compact('data'));
    }
}
