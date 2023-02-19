<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_date',
        'start_time',
        'end_time',
        'game',
        'payement',
        'instructions'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
