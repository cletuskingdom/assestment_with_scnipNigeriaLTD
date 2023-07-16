<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $collection = Product::all();
        // $sorted = $collection->sortBy('price'); // sorting by price
        $sorted = $collection->sortBy(function ($product) {
            return $product->sales_count / $product->views_count; // sorting the ratio of sales per view
        });

        $sortedProducts = $sorted->values()->all();
        return view('welcome', [
            'sortedProducts' => $sortedProducts,
            'tb_head' => $collection->first() ? array_keys($collection->first()->getAttributes()) : []
        ]);
    }
}
