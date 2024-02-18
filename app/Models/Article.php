<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'created_by',
        'views',
        'likes',
        'title',
        'description',
        'status',
        'img',
        'slug',
        'category',
        'type',
        'cid',
        'min',
        'short_description',
        'fantasy_id',
        'match_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function fantasy()
    {
        return $this->belongsTo(Fantasy::class, 'fantasy_id');
    }
}
