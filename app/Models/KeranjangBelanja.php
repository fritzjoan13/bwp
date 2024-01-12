<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangBelanja extends Model
{
    use HasFactory;
    public $table = 'keranjang_belanja';
    public $primaryKey = 'id_keranjang';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_keranjang','id_users', 'id_barang','qty_barang','subtotal','status_keranjang'];

    function insert_keranjang($id_users, $id_barang,$qty_barang,$subtotal) {
        KeranjangBelanja::create([
            'id_keranjang' => 0,
            'id_users' => $id_users,
            'id_barang' => $id_barang,
            'qty_barang' => $qty_barang,
            'subtotal'=>$subtotal,
            'status_keranjang'=>1
        ]);
    }
}
