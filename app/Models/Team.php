<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $fillable = [
        'name',
        'user_id',
        'project_id',
        'picture',
        'position',
        'skill',
        'linked_in',
        'github',
        'phone',
        'email',
        'status'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function about()
    {
        return $this->hasOne(About::class);
    }

}
