<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ProductReviews extends Component
{
    public Product $product;

    public function render(): View
    {
        $reviews = $this->product->users()->get();

        return view('livewire.product-reviews', compact('reviews'));
    }
}
