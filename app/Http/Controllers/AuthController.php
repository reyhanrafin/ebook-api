<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function me() {
        return [
            "nis" => 3103118114,
            "name" => "REYHAN RAFINDRA NURFITRADI",
            "gender" => "Laki-laki",
            "phone" => 6281392249133,
            "class" => "XII RPL 4"
        ];
    }
}
