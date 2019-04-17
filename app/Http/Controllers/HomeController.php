<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
//        return view('home.homepage', compact('categories'));
        return view('template/test', compact('categories'));
    }
}
