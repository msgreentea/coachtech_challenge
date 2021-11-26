<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static $ValidationRules = array(
        'fullname' => 'required',
        // 'lastname' => 'required',
        'gender' => 'required',
        'email' => 'required | email:rfc,dns',
        'postcode' => 'required | max:8',
        'address' => 'required',
        'opinion' => 'required | max:120'
    );
}