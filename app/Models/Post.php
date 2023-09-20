<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImage_UrlAttribute() 
    {
        return Storage::url('images/posts/' . $this->image);
    }
}


