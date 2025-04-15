<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['heading', 'image', 'description', 'link', 'btn_text', 'another_link', 'another_btn_text'];

    public function shareable()
    {
        return $this->morphTo();
    }
}
