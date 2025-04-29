<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'category_id', 'user_id', 'image', 'heading', 'description', 'status','meta_title','meta_keyword','meta_description'];



    public function sections()
    {
        return $this->morphMany(Section::class, 'shareable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function scopeActive($query)
    {
        return $query->where('status', 'published');
    }
}
