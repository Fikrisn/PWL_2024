<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello(){
        return 'selamat datang';
    }

    public function index(){
        return 'Halo saya fikri';
    }

    public function about(){
        return '22416760105/Fikri';
    }

    public function articles($id) {
        return 'Halaman dengan articles id' .$id;
    }
}
