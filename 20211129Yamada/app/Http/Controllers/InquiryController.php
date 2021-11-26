<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class InquiryController extends Controller
{
    // /inquiryページを表示
    public function inquiry()
    {
        // $fullname = $this->lastname . $this->firstname;
        return view('inquiry');
    }

    // inquiryで入力したデータを保存、confirmationで表示
    public function confirm(Request $request)
    {
        $this->Validate($request, Contact::$ValidationRules);
        // $data = $request->all();
        $data = $request->input();
        return view('confirmation', ['data' => $data]);
    }

    // inquiryで入力したデータを表示
    public function send(Request $request)
    {

        $data = Contact::all();
        return view('confirmation', ['data' => $data]);
        // return view('confirmation');
    }
}