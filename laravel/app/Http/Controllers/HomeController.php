<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothe;
class HomeController extends Controller
{
    public function index() {
        $vestiti = Clothe::all();
        return view('home', ['vestiti' => $vestiti]);
        // dd($vestiti);
    }
}
