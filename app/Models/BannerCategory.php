<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerCategory extends Model
{
    use HasFactory;
    protected $table = 'banners_categories';
    protected $fillable = [
        'title', 'description', 'picture', 'status'
    ];

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }
}
