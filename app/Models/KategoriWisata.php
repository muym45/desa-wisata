<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriWisata extends Model
{
    protected $table = 'kategori_wisata'; // pastikan sesuai nama tabel

    protected $fillable = ['kategori_wisata'];
    public function getRouteKeyName()
    {
        return 'id';
    }
}
