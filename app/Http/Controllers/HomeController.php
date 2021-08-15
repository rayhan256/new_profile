<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index() {
        $portfolio = Portfolio::query()->with('category')->get();
        $category = Category::all();
        return view('frontend.index', ['data' => $portfolio, 'categories' => $category]);
    }

    function portfolio($id) {
         $portfolio = Portfolio::query()->with('gallery')->with('category')->where('id', $id)->first();
    }
}
