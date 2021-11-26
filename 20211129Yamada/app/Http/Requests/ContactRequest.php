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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'fullname' => 'required',
            'lastname.firstname' => 'required',
            'gender' => 'required',
            'email' => 'required | email:rfc,dns',
            'postcode' => 'required | max:8',
            'address' => 'required',
            'opinion' => 'required | max:120'
        ];
    }
    // バリデーション前にデータを加工する。したい
    // prepareForValidationメソッドでデータ加工する
    // protected function prepareForValidation()
    // {
    //     $fullname = ($this->filled(['lastname', 'firstname'])) ? $this->lastname . ' ' . $this->firstname '';
    //     $this->merge([
    //         'fullname' => $fullname
    //     ])
    // }
}