<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Livewire\Component;

class ProductReviewGeneral extends Component
{
    public Product $product;
    public int $totalReviews;
    public float $avgRating;

    public function mount()
    {

        $this->totalReviews = $this->product->users()->count();
        $this->avgRating = $this->product->users()->avg('rating');
    }

    public function render(): View
    {
        return view('livewire.product-review-general');
    }
}
