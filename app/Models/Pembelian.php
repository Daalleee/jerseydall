<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jersey_id',
        'jumlah',
        'total_harga',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jersey()
    {
        return $this->belongsTo(Jersey::class);
    }
}
