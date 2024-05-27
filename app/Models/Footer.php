<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'country',
        'address',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'github',
        'logo',
        'telp',
        'whatsapp',
        'email',
        'open_hours_start',
        'open_hours_end',
        'open_days',
    ];
    public function holidays()
    {
        return $this->belongsToMany(Holiday::class, 'footer_holidays');
    }
}
