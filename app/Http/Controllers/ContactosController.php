<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function contactos(){
        return view("contactos");
    }
}
