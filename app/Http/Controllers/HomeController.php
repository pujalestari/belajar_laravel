<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
    return view('welcome');
    }
    public function about(){
    return('About Us');
    }
    public function datadiri(){
    return('Nama : Puja Lestari Nurfauziah <br> NIM : D212011024 <br> Kelas : KA-7B');
    }

}
