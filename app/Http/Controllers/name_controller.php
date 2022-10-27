<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class name_controller extends Controller
{
    public function post() {
        return view('post-card.blade.php');
    }
}
