<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        try {
            $search = $request->input('search');
            $products = Product::with('category')
                ->where('name_en', 'like', '%' . $search . '%')
                ->orWhere('name_ch', 'like', '%' . $search . '%')
                ->orWhere('name_th', 'like', '%' . $search . '%')
                ->get();
        } catch (\Exception $exception) {
            return view('search_result')->withErrors(['message' => $exception->getMessage()]);
        }
        return view('search_result', ['products' => $products]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        return redirect()->route('search', ['search' => $search])->withInput();
    }
}
