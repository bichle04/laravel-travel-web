<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tour',
        'id_user',
        'fname',
        'email',
        'phone',
        'departure',
        'qty_adult',
        'qty_child',
        'total_price'
    ];

    public function tour()
    {
        return $this->hasOne(Tour::class, 'id', 'id_tour');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function scopeSearch($query)
    {
        if($key = request()->key) {
            $query = $query->where('departure','like','%' . $key . '%')
                           ->orWhere('phone', 'like', '%' . $key . '%')
                           ->orWhere('email', 'like', '%' . $key . '%')
                           ->orWhere('fname', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
