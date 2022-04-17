<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;
use App\Models\article;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class tag extends Model
{
    use HasFactory;

    protected $fillable=['title','content'];

    public function posts()
    {
        return $this->morphedByMany(post::class,'tagable');
    }

    public function articles()
    {
        return $this->morphedByMany(articles::class,'tagable');
    }
}
