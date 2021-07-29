<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MerchantCategoryCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'description'
    ];

    public static function boot() {
        parent::boot();
        static::creating(function (MerchantCategoryCode $mcc) {
            $mcc->uuid = (string) Str::uuid();
        });
    }
}
