<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function inquiry()
    {
        return view('inquiry');
    }
    public function confirm()
    {
        $items = item::all();
        return view('confirmation', ['items' => $items]);
    }
}