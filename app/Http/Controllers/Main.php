<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        // echo "Hello Laravel 10!";

        $data = [
            'title' => 'Hello Laravel 10',
            'description' => 'Learning Laravel 10'
        ];

        return view('main', $data);
    }
}
