<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            // The unsorted array of products
        ];

        $catalog = new Catalog($products);
        $productPriceSorter = 'price'; // Sort by price
        $productSalesPerViewSorter = 'salesPerView'; // Sort by sales per view

        $productsSortedByPrice = $catalog->getProducts($productPriceSorter);
        $productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);

        // Return the sorted products or pass them to a view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
