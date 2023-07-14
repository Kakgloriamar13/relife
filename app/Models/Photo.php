<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['story_id', 'title', 'file_name',];

    public function story() {
        return $this->belongsTo(Story::class);
    }
}
