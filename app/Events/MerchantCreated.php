<?php

namespace App\Events;

use App\Models\Merchant;
use Illuminate\Foundation\Events\Dispatchable;

class MerchantCreated
{
    use Dispatchable;

    private Merchant $merchant;

    public function __construct(Merchant $merchant)
    {
        $this->merchant = $merchant;
    }
}
