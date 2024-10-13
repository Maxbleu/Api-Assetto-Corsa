<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';

    protected $fillable = [
        'name',
        'category',

        'power',
        'torque',
        'weight',
        'power_to_weight_ratio',
        'top_speed',

        'year',
        'description',
        'url_image',

        'brand_id'
    ];

    public function brand(): BelongsTo{
        return $this->belongsTo(Brand::class,"brand_id");
    }
}
