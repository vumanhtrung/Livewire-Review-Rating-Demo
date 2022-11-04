<?php

namespace App\Http\Livewire;

use App\Models\ProductUser;
use Illuminate\View\View;
use Livewire\Component;

class ProductReviewGeneral extends Component
{
    protected $listeners = ['updateReviewGeneral' => 'calculateTotalReviews'];

    public int $productId;
    public int $totalReviews;
    public $avgRating;
    public array $ratings = [];

    public function render(): View
    {
        $total = $this->totalReviews;
        ProductUser::query()
            ->selectRaw('rating, count(*) as rating_count')
            ->where('product_id', $this->productId)
            ->orderByDesc('rating')
            ->groupBy('rating')
            ->get()
            ->each(function($group) use ($total) {
				$this->ratings[$group->rating] = round($group->rating_count / $total * 100);
			});
        
        foreach(range(1, 5) as $rating) {
            if (! array_key_exists($rating, $this->ratings)) {
                $this->ratings[$rating] = 0;
            }
        }

        return view('livewire.product-review-general');
    }

    public function calculateTotalReviews()
    {
        $this->totalReviews++;
        $this->avgRating = ProductUser::query()
            ->where('product_id', $this->productId)
            ->avg('rating');
    }
}
