<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    // バリデーション前にデータを加工する。したい
    // prepareForValidationメソッドでデータ加工する
    protected function prepareForValidation()
    {
        $this->merge([
            'postcode' => mb_convert_kana($this->postcode, 'as'),
        ])

        // 名前
        $data = $this->all();

        $data['fullname'] = $this->input('lastname') . $this->input('firstname');

        $this->getInputSource()->replace($data);


        // 郵便番号
        if ($this->has('slug')) {
            // 全角英数を半角に
            $this->merge(['slug' => mb_convert_kana($this->slug, 'as')]);
        }
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'fullname' => 'required',
            'fullname' => 'required',
            'gender' => 'required',
            'email' => 'required | email:rfc,dns',
            'postcode' => 'required | max:8',
            'address' => 'required',
            'opinion' => 'required | max:120'
        ];
    }
}