<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::all();
        $brands = Brands::all();
        return view('catalog.index' , compact('categories','brands'));
    }
    public function showCatalog($categoryList)
    {
        // echo $categoryList;
        $categories = Category::all();
        $brands = Brands::all();
        // Логика для получения данных о категории по slug
        // $category = Category::where('name', $categories)->first();
       
        $categoryName = 'Наборы для татуировок';
        $category = Category::where('name', $categoryName)->first();
        $categoryId = $category->id ?? null;
        $products = Products::where('category_id', $categoryId)->get();
        echo $categoryId; 
        if ($category) {
            return view('catalog.show', compact('products','categories','brands'));
        }
        
        abort(404);
    }
}
