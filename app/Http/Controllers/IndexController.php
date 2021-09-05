<?php

namespace App\Http\Controllers;

use App\Models\Block;

class IndexController extends Controller
{
    function index(){

        return view('front.generator.index', ['list' => Block::all()->sortBy("order")]);
    }
}
