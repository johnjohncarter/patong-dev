<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = ProductCategory::query()->get();
        $products = Product::query()->get();
        $response['categories'] = $categories;
        $response['products'] = $products;
        return view('product.product', $response);
    }

    public function show($category_id)
    {
        $categories = ProductCategory::query()->get();
        $products = Product::query()
            ->where('category_id', $category_id)
            ->get();
        $response['categories'] = $categories;
        $response['products'] = $products;
        return view('product.product', $response);
    }
}
