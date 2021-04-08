<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'blog_body',
        'user_id',
        'status',
        'likes',
        'blog_hero_img'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
