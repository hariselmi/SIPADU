<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CobaController extends Controller
{
        public function index(){
        $artikel = Article::all();
        return view ('coba', compact('artikel'));
    }
}
