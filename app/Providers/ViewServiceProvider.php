<?php

namespace App\Providers;

use App\Http\View\Composers\CountryComposer;
use App\Http\View\Composers\MerchantCategoryCodeComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        View::composer([
            'merchants.create',
            'merchants.edit',
        ], CountryComposer::class);

        View::composer([
            'merchants.create',
            'merchants.edit',
        ], MerchantCategoryCodeComposer::class);
    }
}
