<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;

    protected $table = 'catatan';

    protected $primaryKey = 'id';

    public function kategori() {
        return $this->belongsTo(KategoriCatatan::class, 'id_kategori');
    }
}
