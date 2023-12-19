<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'time',
        'description',
        'price',
        'price_child',
        'id_destination',
        'file',
        'status',
        'url'
    ];

    public function destination()
    {
        return $this->hasOne(Destination::class, 'id', 'id_destination')
            ->withDefault(['name' => '']);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'id_tour', 'id');
    }

    public function scopeSearch($query)
    {
        if($key = request()->key) {
            $query = $query->where('name','like','%' . $key . '%');
        }
        return $query;
    }
}
