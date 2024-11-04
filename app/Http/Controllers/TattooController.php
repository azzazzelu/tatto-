<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Category;
use Illuminate\Http\Request;

class TattooController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $brands = Brands::all();
        return view('home.home', compact('categories','brands'));
    }
}
