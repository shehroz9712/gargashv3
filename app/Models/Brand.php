<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Brand extends Model
{
    use HasFactory;
    public function sections(): MorphMany
    {
        return $this->morphMany(Section::class, 'shareable');
    }


    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
