<?php

namespace App\Http\Livewire;

use App\Models\ProductUser;
use Livewire\Component;

class ProductReviewAverage extends Component
{
    protected $listeners = ['updateAverageRating' => 'calculateAverageRating'];
    
    public int $productId;
    public $avgRating;

    public function render()
    {
        return view('livewire.product-review-average');
    }

    public function calculateAverageRating()
    {
        $this->avgRating = ProductUser::query()
            ->where('product_id', $this->productId)
            ->avg('rating');
    }
}
