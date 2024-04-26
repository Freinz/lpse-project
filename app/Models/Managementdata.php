<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managementdata extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'city_name',
        'jenis_barang',
        'nama_barang',
        'harga_satuan',
        'kuartal',
        'tahun',
    ];

      

}
=======
    public function city() {

        return $this->belongsTo(City::class);

    }

}
>>>>>>> fa421796470d8f6c48f09654b6a5e7d955bad27c
