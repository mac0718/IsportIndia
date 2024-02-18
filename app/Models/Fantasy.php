<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fantasy extends Model
{
    protected $fillable = [
        'created_by',
        'views',
        'likes',
        'title',
        'short_description',
        'description',
        'status',
        'slug',
        'img',
        'min',
        'type',
        'match_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
