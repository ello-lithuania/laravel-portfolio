<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Genre;
use App\Models\Author;
use App\Models\User;
use App\Models\Review;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'cover', 'price', 'discount', 'user_id'];

    public function genres() {
        return $this->belongsToMany(Genre::class);
    }

    public function authors() {
        return $this->belongsToMany(Author::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getIsNewAttribute()
    {
        return now()->subDays(7) <= $this->created_at;
    }
    public function bookReviews()
    {
        return $this->hasMany(Review::class)->latest();
    }

}
