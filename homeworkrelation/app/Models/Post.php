<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function comment()
    {
        return $this->hasMany(comment::class);
    }
}
