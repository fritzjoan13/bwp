<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stokcabang extends Model
{
    use HasFactory;
    public $table = 'stokcabang';
    public $primaryKey = 'id_stokcabang';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_stokcabang', 'id_cabang', 'id_barang','qty_stok'];

    function getall() {
        return stokcabang::select('stokcabang.*','cabang.nama_cabang','barang.nama_barang')
        ->join('cabang','cabang.id_cabang','=','stokcabang.id_cabang')
        ->join('barang','barang.id_barang','=','stokcabang.id_barang')
        ->get();
    }
    function getbyIDCabang($id_cabang){

        return stokcabang::select('stokcabang.*','cabang.nama_cabang','barang.nama_barang')
        ->where('stokcabang.id_cabang','=',$id_cabang)
        ->join('cabang','cabang.id_cabang','=','stokcabang.id_cabang')
        ->join('barang','barang.id_barang','=','stokcabang.id_barang')
        ->get();
    }
    function searchforAddStok($id_cabang,$id_barang){
        return stokcabang::where('id_cabang','=',$id_cabang)
        ->where('id_barang','=',$id_barang)
        ->first();
    }
    function addstokcabang($id_cabang,$id_barang,$jumlah_ditambahkan){
        $row=stokcabang::where('id_cabang', '=', $id_cabang)
        ->where('id_barang', '=', $id_barang)->first();

        $jumlahsekarang=$row->qty_stok;
        $total=$jumlahsekarang+$jumlah_ditambahkan;
        $res=stokcabang::where('id_cabang', '=', $id_cabang)
                ->where('id_barang', '=', $id_barang)
                ->update(['qty_stok' => $total]);

        $rowbarang=Barang::where('id_barang', '=', $id_barang)->first();
                $jumlahsekarang=$rowbarang->stok_barang;
                $total=$jumlahsekarang+$jumlah_ditambahkan;
               $resbarang=Barang::where('id_barang', '=', $id_barang)
                        ->update(['stok_barang' => $total]);
        return $rowbarang;
    }
    function insert_stokcabang($id_cabang,$id_barang){
        $sc=stokcabang::create([
            'id_stokcabang' => 0,
            'id_cabang' => $id_cabang,
            'id_barang' => $id_barang,
            'qty_stok' => 0
        ]);
    }

}
