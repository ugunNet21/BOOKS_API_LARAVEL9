<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananCategory extends Model
{
    use HasFactory;
    protected $table =  'layanans_categories';
    protected $fillable = [
        'title',
        'description',
        'picture',
        'status',
    ];

    // Relasi dengan Layanan
    public function layanans()
    {
        return $this->hasMany(Layanan::class,'layanans_category_id');
    }
}
