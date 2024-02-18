<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'created_by',
        'views',
        'likes',
        'title',
        'slug',
        'short_description',
        'description',
        'status',
        'img',
        'min',
        'cid',
        'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function getData()
    {
        return static::with('user')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
    }
}
