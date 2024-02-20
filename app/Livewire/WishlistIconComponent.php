<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class WishlistIconComponent extends Component
{
    #[On('removeFromWishlist')]
    #[On('addToWishlist')]
    #[On('addToWishlistDetail')]
    #[On('removeFromWishlistDetail')]
    public function render()
    {
        return view('livewire.wishlist-icon-component');
    }
}
