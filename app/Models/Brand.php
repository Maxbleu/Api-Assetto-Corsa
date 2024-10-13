<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';

    protected $fillable = [
        'name',
        'country',
        'url_logo',
    ];

    public function cars(): HasMany{
        return $this->hasMany(Car::class, "brand_id");
    }
}
