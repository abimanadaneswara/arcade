<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan';
    protected $primaryKey = 'id_ruangan';
    protected $fillable = ['nama_ruangan','kategori_id_kategori','id_pemilik','harga','ukuran','kapasitas','alamat_ruangan','kecamatan','kabupaten','provinsi','deskripsi'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    } 


}
