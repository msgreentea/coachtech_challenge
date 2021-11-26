<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class InquiryController extends Controller
{
    // /inquiryページを表示
    public function inquiry()
    {
        return view('inquiry');
    }

    // inquiryで入力したデータを保存、confirmationで表示
    public function typeInfo(Request $request)
    {
        $this->Validation($request, Contact::$ValidationRules);
        $data = $request->all();
        // $data = Customer::create([]);
        return view('confirmation', ['data' => $data]);
    }

    // inquiryで入力したデータを表示
    public function confirm()
    {
        $items = Contact::all();
        // return view('confirmation', ['items' => $items]);
        // return view('confirmation');
    }
}