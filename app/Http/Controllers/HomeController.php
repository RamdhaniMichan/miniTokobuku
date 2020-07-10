<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class HomeController extends Controller
{
    public function index(){
    	$buku = Buku::all();
    	return view('layout.home', compact('buku'));
    }
}
