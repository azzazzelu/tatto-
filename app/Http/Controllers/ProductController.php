<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $brands = Brands::all();
        return view('catalog.index', compact('categories', 'brands'));
    }


    public function showCatalog($categoryList)
    {
        $categories = Category::all();
        $brands = Brands::all();
        $category = Category::where('name', $categoryList)->first();
        $categoryId = $category->id ?? null;
        $products = Products::where('category_id', $categoryId)->get();
        if ($category) {
            return view('catalog.show', compact('products', 'categories', 'brands'));
        }

        abort(404);
    }
    public function showBrands($brandList)
    {
        $categories = Category::all();
        $brands = Brands::all();
        $brand = Brands::where('name', $brandList)->first();
        $brandId = $brand->id ?? null;
        $products = Products::where('brand_id', $brandId)->get();

        if ($brand) {
            return view('catalog.show', compact('products', 'categories', 'brands'));
        }

        abort(404);
    }
    public function showProducts($id)
    {
        $product = Products::where('id', $id)->first();

        if ($product) {
            return view('catalog.ItemShow', compact('product'));
        }

        abort(404);
    }
    
}
