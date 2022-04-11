<?php

namespace App\Models;

use App\Enum\Order\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    protected $cast=[
        'status'=>OrderStatus::class
    ];

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
