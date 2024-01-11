<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    use HasFactory;
    protected $table = 'kapals';

    protected $fillable = [
        'nm_kapal',
        'kapasitas',
    ];
    public function tiket () {
        return $this->hasMany(Tiket::class);
    }
}
