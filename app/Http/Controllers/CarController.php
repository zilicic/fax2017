<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function marka(){
        return  "Marka automobila : KIA";
            }
     
    public function boja() {
        return "Boja automobila je : Siva";
            }
}
