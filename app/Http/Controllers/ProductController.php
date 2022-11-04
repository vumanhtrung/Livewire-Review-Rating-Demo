<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $product = Product::query()
            ->withAvg('productReviews as avg_rating', 'rating')
            ->withCount('productReviews as total_reviews')
            ->first();

        return view('product_detail', compact('product'));
    }
}
