<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $results = DB::select('SELECT * FROM `movies` ORDER BY `rating` DESC LIMIT 10');
        
        return view('index.index', ['topRatedMovies' => $results]);
    }
}