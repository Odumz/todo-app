<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Wake up',
            'description' => 'We need to wake up'
        ];

        return Inertia::render('Index', $data);
    }
}
