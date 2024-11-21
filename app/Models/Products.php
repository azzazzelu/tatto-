<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Products extends Model
{
    use HasFactory,Notifiable;
    protected $guarded = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
