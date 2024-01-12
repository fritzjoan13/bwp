<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerekBarang extends Model
{
    use HasFactory;
    public $table = 'merek_barang';
    public $primaryKey = 'id_merek';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_merek','nama_merek', 'deskripsi_merek', 'status_merek'];

    function getall() {
        return MerekBarang::get();
    }

    public function Barang(){
        return $this->hasMany(Barang::class, "id_merek", "id_merek");
    }

    function insert_merek($nama_merek, $deskripsi_merek) {
        $qry= MerekBarang::where('nama_merek','=',$nama_merek)->get();
        if(count($qry)>0){
            return "merek already exist";
        }
        else{
            MerekBarang::create([
                'id_merek' => 0,
                'nama_merek' => $nama_merek,
                'deskripsi_merek' => $deskripsi_merek,
                'status_merek' => 1,
            ]);
            return "insert merek done";
        }


    }
    function updatedatamerek($nama_merek, $deskripsi_merek, $id_merek) {
        MerekBarang::where('id_merek', '=', $id_merek)
                ->update(['nama_merek' => $nama_merek, 'deskripsi_merek' => $deskripsi_merek]);
    }
    function statusSet0($id_merek){
        // set 0 = soft delete
        MerekBarang::where('id_merek', '=', $id_merek)
        ->update(['status_merek' => 0]);
    }
    function statusSet1($id_merek){
        // set 1 = reset soft delete
        MerekBarang::where('id_merek', '=', $id_merek)
        ->update(['status_merek' => 1]);
    }
}
