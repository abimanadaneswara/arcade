<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $primaryKey = 'id_ruangan';
    protected $fillable = ['nama_ruangan','harga','ukuran','kapasitas','peraturan','alamat_ruangan','kecamatan','kabupaten','provinsi','deskripsi'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
