<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderTransaksi extends Model
{
    use HasFactory;
    public $table = 'header_transaksi';
    public $primaryKey = 'id_transaksi';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_transaksi','id_cabang', 'id_customer', 'tanggal_transaksi','id_pegawai', 'total_transaksi','status_transaksi', 'nama_penerima', 'alamat_penerima', 'nomor_penerima', 'jenis_pembayaran', 'pengiriman'];
    function getall() {
        return HeaderTransaksi::select('header_transaksi.*','users.nama_users')
        ->where('status_transaksi','!=',3)
        ->join('users','users.id_users','=','header_transaksi.id_customer')
        ->orderby('tanggal_transaksi','desc')
        ->get();
    }
    function getlaporan(){
        return HeaderTransaksi::select('header_transaksi.*','users.nama_users')
        ->where('status_transaksi','=',3)
        ->join('users','users.id_users','=','header_transaksi.id_customer')
        ->orderby('tanggal_transaksi','desc')
        ->get();
    }
    function searchbyidhtrans($idhtrans){
        return HeaderTransaksi::select('header_transaksi.*','users.nama_users')
        ->where('id_transaksi','=',$idhtrans)
        ->join('users','users.id_users','=','header_transaksi.id_customer')
        ->get();
    }
    function searchbyidcustomer($id_customer){
        return HeaderTransaksi::where('id_customer','=',$id_customer)->get();
    }

    function searchbyidpegawai($id_pegawai){
        return HeaderTransaksi::where('id_pegawai','=',$id_pegawai)->get();
    }

    function searchbyidcabang($id_cabang){
        return HeaderTransaksi::where('id_cabang','=',$id_cabang)->get();
    }

    function searchbytanggaltransaksi($tanggal_transaksi){
        return HeaderTransaksi::where('tanggal_transaksi','=',$tanggal_transaksi)->get();
    }

    function insert_headerTransaksi($id_cabang,$id_customer,$tanggal_transaksi,$id_pegawai,$total_transaksi,
    $nama_penerima,$alamat_penerima,$nomor_penerima,$jenis_pembayaran,$pengiriman) {
        $res = HeaderTransaksi::create([
            'id_transaksi' => 0,
            'id_cabang' => $id_cabang,
            'id_customer' => $id_customer,
            'tanggal_transaksi' => $tanggal_transaksi,
            'id_pegawai' => $id_pegawai,
            'total_transaksi' => $total_transaksi,
            'nama_penerima'=>$nama_penerima,
            'alamat_penerima'=>$alamat_penerima,
            'nomor_penerima'=>$nomor_penerima,
            'jenis_pembayaran'=>$jenis_pembayaran,
            'pengiriman'=>$pengiriman,
            'status_transaksi'=>0,
        ]);
        return $res->id_transaksi;
    }
}
