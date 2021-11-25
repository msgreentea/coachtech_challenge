<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [
       'id'
    ];

    public static function rules()
    {
        'firstname' => 'required',
        'lastname' => 'required',
        'sex' => 'required',
        'mail' => 'required | email:rfc,dns',
        'zipcode' => 'required | max:8',
        'address' => 'required',
        'comment' => 'required | max:120'
    }
}
