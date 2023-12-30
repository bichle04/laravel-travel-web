<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area',
        'file',
        'status',
        'url'
    ];

    public function tours()
    {
        return $this->hasMany(Tour::class, 'id_destination', 'id');
    }

    public function scopeSearch($query)
    {
        if($key = request()->key) {
            $query = $query->where('name','like','%' . $key . '%');
        }
        return $query;
    }
}
