<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class WishlistMobileIconComponent extends Component
{
    #[On('removeFromWishlist')]
    #[On('addToWishlist')]
    public function render()
    {
        return view('livewire.wishlist-mobile-icon-component');
    }
}
