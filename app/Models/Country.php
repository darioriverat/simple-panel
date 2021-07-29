<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'numeric_code',
        'alpha_3_code',
        'alpha_2_code'
    ];

    public static function boot() {
        parent::boot();
        static::creating(function (Country $country) {
            $country->uuid = (string) Str::uuid();
        });
    }
}
