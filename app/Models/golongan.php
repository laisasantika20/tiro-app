<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class golongan extends Model
{
    use HasFactory;
    protected $table = 'golongan';

    protected $fillable = ['nm_golongan', 'harga'];

    // Contoh tambahan jika ada hubungan dengan model lain
    public function kapals()
    {
        return $this->hasMany(Kapal::class, 'golongan_id');
    }
}
