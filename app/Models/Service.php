<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'user',
        'name',
        'contact',
        'address',
        'serial_number',
        'description',
        'case',
        'service_category_id',
        'status',
        'picture',
        'down_payment',
        'notes',
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
}
