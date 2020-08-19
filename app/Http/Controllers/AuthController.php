<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return "NIS : 3103 118 011,
                Name : Ardi Saputra,
                Gender : Male,
                Phone : +62 895 4228 13477,
                Class : XII RPL 1";
    }
}