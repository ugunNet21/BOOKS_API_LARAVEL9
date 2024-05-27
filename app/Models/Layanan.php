<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table =  'layanans';
    protected $fillable = [
        'title',
        'description',
        'picture',
        'status',
        'layanans_category_id',
    ];

    // Relasi dengan LayananCategory
    public function category()
    {
        return $this->belongsTo(LayananCategory::class, 'layanans_category_id');
    }
}
