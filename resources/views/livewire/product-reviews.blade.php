<div class="col-lg-8">
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Reviews ({{ $totalReviews }})</h5>
            <hr>
            @forelse ($reviews as $item)
                <blockquote class="{{ !$loop->last ? 'border-bottom' : '' }}">
                    <div class="float-lg-end d-flex mb-3">
                        <div class="btn-group d-inline-flex me-2">
                            <button class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip" data-bs-title="Like"> 
                                <i class="fa fa-thumbs-up"></i> 
                            </button>
                            <button class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip" data-bs-title="Dislike"> 
                                <i class="fa fa-thumbs-down"></i> 
                            </button>
                        </div>
                        <button class="btn btn-light btn-sm float-end "> <i class="fa fa-ellipsis-v"></i></button>
                    </div>
                    <div class="icontext"> 
                        <img src="{{ url('images/avatars/avatar.webp') }}" class="img-xs icon rounded-circle">
                        <div class="text">
                            <h6 class="mb-0"> {{ $item->name }} </h6>
                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width:{{ $item->review->percent }}%" class="stars-active">
                                        <img src="{{ url('images/misc/stars-active.svg') }}" alt="">
                                    </li>
                                    <li> 
                                        <img src="{{ url('images/misc/starts-disable.svg') }}" alt=""> 
                                    </li>
                                </ul> 
                                <b class="dot"></b> 
                                <small class="label-rating text-muted"> Purchased on Wed, May 12 </small>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p> {{$item->review->review}} </p>
                    </div>
                </blockquote>
            @empty
                @auth                
                    <div>Be the first to review this product.</div>
                @endauth
                @guest
                    <div>Login and be the first to review this product.</div>
                @endguest
            @endforelse
            @if ($reviews->count() < $totalReviews)
                <button wire:click.prevent="load" type="button" class="btn btn-primary" wire:loading.attr="disabled">Load more</button>
            @endif
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Review and Rating </h5>
            @auth    
                <form wire:submit.prevent="review">
                    <div class="stars @error('rating') is-invalid @enderror">
                        <input wire:model.defer="rating" class="star star-5" id="star-5" type="radio" value="5" name="rating"/>
                        <label class="star star-5" for="star-5"></label>
                        <input wire:model.defer="rating" class="star star-4" id="star-4" type="radio" value="4" name="rating"/>
                        <label class="star star-4" for="star-4"></label>
                        <input wire:model.defer="rating" class="star star-3" id="star-3" type="radio" value="3" name="rating"/>
                        <label class="star star-3" for="star-3"></label>
                        <input wire:model.defer="rating" class="star star-2" id="star-2" type="radio" value="2" name="rating"/>
                        <label class="star star-2" for="star-2"></label>
                        <input wire:model.defer="rating" class="star star-1" id="star-1" type="radio" value="1" name="rating"/>
                        <label class="star star-1" for="star-1"></label>
                    </div>
                    @error('rating')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
                    <div class="mb-3">
                        <textarea wire:model.defer="review" class="form-control @error('review') is-invalid @enderror" placeholder="Type here"></textarea>
                        @error('review')
                            <small class="invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Submit</button>
                </form>
            @endauth
            @guest
                <div>Please login to review</div>
            @endguest
        </div>
    </div>
</div>
