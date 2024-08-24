<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class pertama extends Controller
{
    //
    public function satu(){
        echo "Tampilkan function satu";
    }
    public function dua(){
        return view ('welcome');
    }
    public function tiga($id){
        echo "parameter 1". $id;
    }
}