<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\anak;

class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Neng Witri Maryani";
    	return "Nama Saya Adalah ".$a."</br>";
    }

    public function tampilan()
    {
    return view('about');
    }

    public function tampilanmodel()
    {
    	$ortu = orangtua::all();
    	return view('about', compact('ortu'));
    }

    public function tampilanmodel2()
    {
    	$ortu = orangtua::all();
    	$anak = anak::all();
    	return view('aboutanak', compact('anak','ortu'));
    }
}
