<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $table = 'barang';
    public $primaryKey = 'id_barang';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_barang','id_merek', 'id_jenis', 'nama_barang','deskripsi_barang','harga_modal','harga_jual','stok_barang','foto_barang','status_barang'];

    function getall() {
        //return Barang::select('Barang.*','merek_barang.nama_barang')->join('merek_barang','merek_barang.id_merek','=','barang.id_merek')->where('status_barang','=',1)->get();
        return Barang::get();
    }

    public function Jenis(){
        return $this->belongsTO(JenisBarang::class, "id_jenis", "id_jenis");
    }

    public function Merek(){
        return $this->belongsTO(MerekBarang::class, "id_merek", "id_merek");
    }

    function findByID($val) {
        $qry = Barang::all();
        foreach($qry as $row) {
                if($row->id_barang == $val)
                { return $row; }
        }
    }
    function insert_barang($id_merek, $id_jenis, $nama_barang, $deskripsi_barang,$harga_modal, $harga_jual, $stok_barang, $foto_barang) {
        $brg=Barang::create([
            'id_barang' => 0,
            'id_merek' => $id_merek,
            'id_jenis' => $id_jenis,
            'nama_barang' => $nama_barang,
            'deskripsi_barang' => $deskripsi_barang,
            'harga_modal' => $harga_modal,
            'harga_jual' => $harga_jual,
            'stok_barang' => $stok_barang,
            'foto_barang' => $foto_barang,
            'status_barang' => 1,
        ]);
        return $brg->id_barang;
    }
    function updatedatabarang(
    $nama_barang,
    $deskripsi_barang,
    $harga_modal,
    $harga_jual,
    $stok_barang,
    $foto_barang,$id_barang) {
        Barang::where('id_barang', '=', $id_barang)
                ->update(['nama_barang' => $nama_barang,
                'deskripsi_barang' => $deskripsi_barang,
                'harga_modal' => $harga_modal,
                'harga_jual' => $harga_jual,
                'stok_barang' => $stok_barang,
                'foto_barang' => $foto_barang]);
    }
    function tambahstok($id_barang,$jumlah){
        $row=Barang::where('id_barang', '=', $id_barang)->first();
        $jumlahsekarang=$row->stok_barang;
        $total=$jumlahsekarang+$jumlah;
        Barang::where('id_barang', '=', $id_barang)
                ->update(['stok_barang' => $total]);

    }
    function statusSet0($id_barang){
        // set 0 = soft delete
        Barang::where('id_barang', '=', $id_barang)
        ->update(['status_barang' => 0]);
    }
    function statusSet1($id_barang){
        // set 1 = reset soft delete
        Barang::where('id_barang', '=', $id_barang)
        ->update(['status_barang' => 1]);
    }

}
