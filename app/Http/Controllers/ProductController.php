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
        return view('welcome', [
            'sortedProducts' => $collection,
            'tb_head' => $collection->first() ? array_keys($collection->first()->getAttributes()) : []
        ]);
    }

    public function indexs() {
        return redirect()->route('welcome');
    }

    public function single_sorting(Request $request){
        $collection = Product::all();

        // Single sorting
        $sorted = $collection->sortBy($request->sortBy);

        // Multiple sorting
        // $sorted = $collection->sortBy(function ($product) {
        //     return $product->sales_count / $product->views_count;
        // });

        $sortedProducts = $sorted->values()->all();
        return view('welcome', [
            'sortedProducts' => $sortedProducts,
            'tb_head' => $collection->first() ? array_keys($collection->first()->getAttributes()) : []
        ]);
    }

    public function multiple_sorting(Request $request){
        $collection = Product::all();
        $value1 = $request->sortBy_1;
        $value2 = $request->compare;
        $value3 = $request->sortBy_2;

        // Multiple sorting
        $sorted = $collection->sortBy(function ($product) use ($value1, $value2, $value3) {
            return $product->$value1 . $product->$value2 . $product->$value3;
        });

        $sortedProducts = $sorted->values()->all();
        return view('welcome', [
            'sortedProducts' => $sortedProducts,
            'tb_head' => $collection->first() ? array_keys($collection->first()->getAttributes()) : []
        ]);
    }
}
