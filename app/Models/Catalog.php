<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    private $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function getProducts($sorter)
    {
        if ($sorter === 'price') {
            usort($this->products, function ($a, $b) {
                return $a['price'] <=> $b['price'];
            });
        } elseif ($sorter === 'salesPerView') {
            usort($this->products, function ($a, $b) {
                $ratioA = $a['sales_count'] / $a['views_count'];
                $ratioB = $b['sales_count'] / $b['views_count'];
                return $ratioA <=> $ratioB;
            });
        } else {
            // Default sorting by product ID
            usort($this->products, function ($a, $b) {
                return $a['id'] <=> $b['id'];
            });
        }

        return $this->products;
    }
}
