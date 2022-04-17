<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\post;

class article extends Model
{
    use HasFactory;

    public function posts():BelongsToMany
    {
        return $this->belongsToMany(post::class);
    }
}
