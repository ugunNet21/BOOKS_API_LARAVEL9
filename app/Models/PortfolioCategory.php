<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    use HasFactory;
    protected $table =  'portfolio_categories';
    protected $fillable = ['title', 'description', 'picture', 'status'];
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'category_id');
    }
}
