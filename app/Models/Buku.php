<?php

namespace App\Models;

use App\Models\Genre;
use App\Models\Penulis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    protected $table = 'tb_buku';
    protected $fillable = [
        'nama_buku', 'id_penulis', 'id_genre', 'tahun', 'desc', 'photo'
    ];
    public function penulis() {
        return $this->hasOne(Penulis::class, 'id', 'id_penulis');
    }
    public function genre() {
        return $this->hasOne(Genre::class, 'id', 'id_genre');
    }
}
