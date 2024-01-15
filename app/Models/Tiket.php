<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $fillable = ['kd_tiket','kapal_id','golongan', 'no_plat', 'tujuan', 'harga'];

    public function kapal () {
        return $this->belongsTo(Kapal::class, 'kapal_id');
    }

    public function golongan () {
        return $this->belongsTo(golongan::class, 'golongan');
    }
}
