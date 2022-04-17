<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\article;
use App\Models\tag;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class post extends Model
{
    use HasFactory;

    protected $fillable=['title','content','author'];

    // public function articles():BelongsToMany
    // {
    //     return $this->belongsToMany(article::class);
    // }
    public function tags():MorphToMany
    {
        return $this->morphToMany(tag::class,'tagable');
    }
}
