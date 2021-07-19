<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'country_id',
        'merchant_category_code_id'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function mcc(): BelongsTo
    {
        return $this->belongsTo(MerchantCategoryCode::class, 'merchant_category_code_id');
    }
}
