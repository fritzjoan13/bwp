<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
    use HasFactory;
    public $table = 'jenis_barang';
    public $primaryKey = 'id_jenis';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_jenis','nama_jenis','status_jenis','id_jenis'];

    function getall() {
        return JenisBarang::get();
    }

    public function Barang(){
        return $this->hasMany(Barang::class, "id_jenis", "id_jenis");
    }

    function findByID($val) {
        $qry = JenisBarang::all();
        foreach($qry as $row) {
                if($row->id_jenis == $val)
                { return $row; }
        }
    }

    function insert_jenis($nama_jenis) {
        $qry= JenisBarang::where('nama_jenis','=',$nama_jenis)->get();
        if(count($qry)>0){
            return "jenis already exist";
        }
        else{
            JenisBarang::create([
                'id_jenis' => 0,
                'nama_jenis' => $nama_jenis,
                'status_jenis' => 1,
            ]);
            return "insert jenis done";
        }

    }
    function updatedatajenis($id_jenis, $nama_jenis) {
        JenisBarang::where('id_jenis', '=', $id_jenis)
                ->update(['nama_jenis' => $nama_jenis]);
    }
    function statusSet0($id_jenis){
        // set 0 = soft delete
        JenisBarang::where('id_jenis', '=', $id_jenis)
        ->update(['status_jenis' => 0]);
    }
    function statusSet1($id_jenis){
        // set 1 = reset soft delete
        JenisBarang::where('id_jenis', '=', $id_jenis)
        ->update(['status_jenis' => 1]);
    }
}
