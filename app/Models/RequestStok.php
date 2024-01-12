<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestStok extends Model
{
    use HasFactory;
    public $table = 'request_stok';
    public $primaryKey = 'id_request';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_request','id_users', 'id_barang', 'id_cabang','jumlah_ditambahkan','tanggal_request','status_request'];
    function getall() {
        return RequestStok::select('request_stok.*','barang.nama_barang','cabang.nama_cabang')
        ->join('barang','barang.id_barang','=','request_stok.id_barang')
        ->join('cabang','cabang.id_cabang','=','request_stok.id_cabang')
        ->orderby('id_cabang')
        ->get();
    }
    function getbyIDPegawai($id){
        return RequestStok::select('request_stok.*','barang.nama_barang')
        ->where('id_users','=',$id)
        ->join('barang','barang.id_barang','=','request_stok.id_barang')
        ->orderby('tanggal_request')
        ->get();
    }
    function insert_request($id_pegawai, $id_barang, $id_cabang,$jumlah_ditambahkan, $tanggal_request) {
        $res=RequestStok::create([
            'id_request' => 0,
            'id_users' => $id_pegawai,
            'id_barang' => $id_barang,
            'id_cabang'=>$id_cabang,
            'jumlah_ditambahkan' => $jumlah_ditambahkan,
            'tanggal_request' => $tanggal_request,
            'status_request' => 1,
        ]);
    }
}
