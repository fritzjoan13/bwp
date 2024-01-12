<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;
    public $table = 'detail_transaksi';
    public $primaryKey = 'id_detail';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_detail','id_transaksi', 'id_barang', 'qty_barang','harga_barang','subtotal'];

    function getall() {
        return DetailTransaksi::get();
    }
    function findbyidHtrans($id) {
        return DetailTransaksi::select('detail_transaksi.*','header_transaksi.*','barang.nama_barang')
        ->where('detail_transaksi.id_transaksi','=',$id)
        ->join('barang','barang.id_barang','=','detail_transaksi.id_barang')
        ->join('header_transaksi','header_transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
        ->get();
    }
    function searchbyidtransaksi($id_transaksi){
        return DetailTransaksi::where('id_transaksi','=',$id_transaksi)->get();
    }

    function searchbyidbarang($id_barang){
        return DetailTransaksi::where('id_barang','=',$id_barang)->get();
    }

    function insert_detailtransaksi($id_transaksi, $id_barang, $qty_barang, $harga_barang, $subtotal) {
        DetailTransaksi::create([
            'id_detail' => 0,
            'id_transaksi' => $id_transaksi,
            'id_barang' => $id_barang,
            'qty_barang' => $qty_barang,
            'harga_barang' => $harga_barang,
            'subtotal' => $subtotal
        ]);
    }
}
