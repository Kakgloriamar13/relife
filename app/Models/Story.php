<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'slug', 'category_id', 'content', 'thumbnail'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
