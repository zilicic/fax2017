<?php
// ovo kreiramo naredbom
// php artisan make:Controllers StudController
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudController extends Controller 
{
    // 
    public function pozdrav(){
        return "Pozdrav iz studControllera";
    }
    public function uci(){
        return "Evo samo što nisam...";
    }
    public function lista(){
        $s=new \App\Stud;
        $studenti=$s->all();
        print_r(json_decode($studenti,TRUE));// zato sto nemamo view
       // return $studenti;
    }
    }

