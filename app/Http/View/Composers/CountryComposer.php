<?php

namespace App\Http\View\Composers;

use App\Models\Country;
use Illuminate\View\View;

class CountryComposer
{
    public function compose(View $view): void
    {
        $view->with('countries', Country::select('id', 'name', 'alpha_3_code')->get());
    }
}
