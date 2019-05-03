<?php

namespace App\Http\Controllers;

use App\Http\Requests\Home\GetAllCategoriesRequest;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(GetAllCategoriesRequest $request)
    {
        $categories = Category::all();

        return view('template.home', compact('categories'));
    }
}
