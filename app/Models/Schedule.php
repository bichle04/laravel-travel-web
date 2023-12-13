<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tour',
        'date',
    ];

    public function tour()
    {
        return $this->hasOne(Tour::class, 'id', 'id_tour');
    }
}
