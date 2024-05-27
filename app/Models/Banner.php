<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'address', 'picture', 'status', 'banner_category_id'
    ];
    protected $attributes = [
        'status' => 'aktif',
    ];

    public function category()
    {
        return $this->belongsTo(BannerCategory::class);
    }
    public function items()
    {
        return $this->hasMany(BannerCategory::class);
    }
}
