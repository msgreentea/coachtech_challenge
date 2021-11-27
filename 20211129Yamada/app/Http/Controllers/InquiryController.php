<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
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
    public function confirm(ContactRequest $request)
    {
        $this->Validate($request, Contact::$ValidationRules);

        // バリデーションでひっかかったら再読み込み
        $data = $request->all();

        // if (Contact::$ValidationRules->fails()) {
        //     return redirect('/');
        // }

        return view('confirmation', ['data' => $data]);
    }

    // inquiryで入力したデータをDBに保存
    public function send(Request $request)
    {
        // DBに保存
        $data = $request->all();
        Contact::create($data);
        $data = $request->input();
    }

    // サンクスページに遷移
    public function thanks(Request $request)
    {

        $data = Contact::all();
        return view('confirmation', ['data' => $data]);
        // return view('confirmation');
    }
}