<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\post;
use App\Models\tag;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class article extends Model
{
    use HasFactory;

    protected $fillable=['title','content'];

    // public function posts():BelongsToMany
    // {
    //     return $this->belongsToMany(post::class);
    // }

    public function tags():MorphToMany
    {
        return $this->morphToMany(tag::class,'tagable');
    }
}
