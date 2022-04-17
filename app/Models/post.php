<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\article;
class post extends Model
{
    use HasFactory;

    protected $fillable=['title','content','author'];

    public function articles():BelongsToMany
    {
        return $this->belongsToMany(article::class);
    }
}
