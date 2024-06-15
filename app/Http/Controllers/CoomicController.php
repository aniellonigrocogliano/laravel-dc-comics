<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coomic;

class CoomicController extends Controller
{
    public function index()
    {
        $coomics = Coomic::all();
        return view('index', compact('coomics'));
    }
}
