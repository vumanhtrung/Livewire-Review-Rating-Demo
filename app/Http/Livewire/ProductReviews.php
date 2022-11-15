<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ProductReviews extends Component
{
    public Product $product;
    public int $totalReviews;
    public int $perPage = 10;
    public $rating;
    public $review;

    protected $rules = [
        'rating' => 'required|integer|between:1,5',
        'review' => 'required|string|min:3|max:500',
    ];

    public function render(): View
    {
        $reviews = $this->product->users()
            ->take($this->perPage)
            ->get()
            ->map(function ($item) {
                $item->review->percent = $item->review->rating * 20;
                return $item;
            });

        return view('livewire.product-reviews', compact('reviews'));
    }

    public function load()
    {
        $this->perPage += 10;
    }

    public function review()
    {
        $this->validate();

        auth()->user()->productReviews()->attach(
            $this->product->id, [
                'rating' => $this->rating,
                'review' => $this->review,
        ]);

        $this->totalReviews++;

        $this->reset('rating', 'review');

        $this->emit('updateAverageRating');
        $this->emit('updateReviewGeneral');
    }
}
