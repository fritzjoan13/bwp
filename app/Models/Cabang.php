<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    public $table = 'cabang';
    public $primaryKey = 'id_cabang';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_cabang','nama_cabang', 'alamat_cabang', 'nomor_cabang','status_cabang'];

    function getall() {
        return Cabang::get();
    }
    function findByID($val) {
        $qry = Cabang::all();
        foreach($qry as $row) {
                if($row->id_cabang == $val)
                { return $row; }
        }
    }
    function insert_cabang($nama_cabang, $alamat_cabang, $nomor_cabang) {
        $qry= Cabang::where('nama_cabang','=',$nama_cabang)->get();
        if(count($qry)>0){
            return "cabang already exist";
        }
        else{
            $res=Cabang::create([
                'id_cabang' => 0,
                'nama_cabang' => $nama_cabang,
                'alamat_cabang' => $alamat_cabang,
                'nomor_cabang' => $nomor_cabang,
                'status_cabang' => 1,
            ]);
            return $res->id_cabang;
        }
    }
    function updatedatacabang($nama_cabang,$alamat_cabang, $nomor_cabang, $id_cabang) {
        Cabang::where('id_cabang', '=', $id_cabang)
                ->update(['nama_cabang'=>$nama_cabang,'alamat_cabang' => $alamat_cabang, 'nomer_cabang' => $nomor_cabang]);
    }
    function statusSet0($id_cabang){
        // set 0 = soft delete
        Cabang::where('id_cabang', '=', $id_cabang)
        ->update(['status_cabang' => 0]);
    }
    function statusSet1($id_cabang){
        // set 1 = reset soft delete
        Cabang::where('id_cabang', '=', $id_cabang)
        ->update(['status_cabang' => 1]);
    }
}
