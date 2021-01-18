<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function me() {
        return [
            "nis"=>"3103118115",
            "name"=>"Reyhan saifulloh",
            "gender"=>"Laki-laki",
            "phone"=>"082242785933",
            "class"=>"XII RPL 4",
        ];
    }
}
