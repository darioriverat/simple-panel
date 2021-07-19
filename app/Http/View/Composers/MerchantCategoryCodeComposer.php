<?php

namespace App\Http\View\Composers;

use App\Models\MerchantCategoryCode;
use Illuminate\View\View;

class MerchantCategoryCodeComposer
{
    public function compose(View $view): void
    {
        $view->with('merchantCategoryCodes', MerchantCategoryCode::all());
    }
}
