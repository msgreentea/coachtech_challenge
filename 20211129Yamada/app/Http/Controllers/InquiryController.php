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

    // データ確認
    public function TypeInfo(Request $request)
    {
        $this->Validate($request, Contact::$ValidationRules);

        // バリデーションでひっかかったら再読み込み
        $data = $request->input();
        if (Contact::$ValidationRules->fails()) {
            return redirect('/');
        }
        // DBに保存
        Contact::create($data);
    }

    // inquiryで入力したデータをDBに保存、confirmationに表示
    public function confirm(Request $request)
    {
        $data = $request->input();
        return view('confirmation', ['data' => $data]);
    }

    // サンクスページ
    public function send(Request $request)
    {

        $data = Contact::all();
        return view('confirmation', ['data' => $data]);
        // return view('confirmation');
    }
}
