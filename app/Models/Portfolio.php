<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolios';
    protected $fillable = ['title', 'description', 'category_id', 'status','picture'];
    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'category_id');
    }
}
