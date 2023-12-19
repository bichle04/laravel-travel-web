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
}
