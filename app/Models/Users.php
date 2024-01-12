<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    use HasFactory;
    public $table = 'users';
    public $primaryKey = 'id_users';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['id_cabang','jenis_users', 'nama_users', 'alamat_users','nomer_users','username_users','password_users','status_users'];

    //Users Genral
    function login($username,$password) {
        $modelUsers=new Users();
        $rowUsers=$modelUsers::where('username_users','=',$username)->where('password_users','=',$password)->first();
        return $rowUsers;
    }

    // Users = Customer
    function getall() {
        return Users::get();
    }
    function getcustomers(){
        return Users::where("jenis_users","=",3)->get();
    }
    function getpegawai(){
        return Users::where("jenis_users","=",2)->get();
    }
    function findByID($val) {
        $qry = Users::all();
        foreach($qry as $row) {
                if($row->id_users == $val)
                { return $row; }
        }
    }
    function searchUsersByName($val) {
        return Users::where('id_users', 'like', '%'.$val.'%')->get();
    }
    function insert_customer($nama_users, $alamat_users, $nomer_users, $username_users, $password_users) {
        Users::create([
            'id_users' => 0,
            'id_cabang' => 100000,
            'jenis_users'=>3,
            'nama_users' => $nama_users,
            'alamat_users' => $alamat_users,
            'nomer_users' => $nomer_users,
            'username_users' => $username_users,
            'password_users' => $password_users,
            'status_users' => 1,
        ]);
    }
    function updatedatacustomer($alamat_users, $nomer_users, $id_users) {
        Users::where('id_users', '=', $id_users)->where('jenis_users','=',3)
                ->update(['alamat_users' => $alamat_users, 'nomer_users' => $nomer_users]);
    }
    function updatepasswordcustomer($password_users,$id_users) {
        Users::where('id_users', '=', $id_users)->where('jenis_users','=',3)
                ->update(['password_users' => $password_users]);
    }
    function bancustomer($id_users) {
        Users::where('id_users', '=', $id_users)->where('jenis_users','=',3)
                ->update(['status_users' => 0]);
    }
    function unbancustomer($id_users) {
        Users::where('id_users', '=', $id_users)->where('jenis_users','=',3)
                ->update(['status_users' => 1]);
    }

    //Users=Pegawai
    function insert_pegawai($id_cabang,$nama_users, $alamat_users, $nomer_users, $username_users, $password_users) {
        Users::create([
            'id_users' => 0,
            'id_cabang' => $id_cabang,
            'jenis_users'=>2,
            'nama_users' => $nama_users,
            'alamat_users' => $alamat_users,
            'nomer_users' => $nomer_users,
            'username_users' => $username_users,
            'password_users' => $password_users,
            'status_users' => 1,
        ]);
    }
    function updatedatapegawai($nama_users, $alamat_users, $nomer_users, $username_users, $password_users, $id_cabang, $id_users) {
        Users::where('id_users', '=', $id_users)->where('jenis_users','=',2)
                ->update(['nama_users' => $nama_users, 'alamat_users' => $alamat_users, 'nomer_users' => $nomer_users, 'username_users' => $username_users, 'password_users' => $password_users, 'id_cabang' => $id_cabang]);
    }
    function updatepasswordpegawai($password_users,$id_users) {
        Users::where('id_users', '=', $id_users)->where('jenis_users','=',2)
                ->update(['password_users' => $password_users]);
    }
    function banpegawai($id_users) {
        Users::where('id_users', '=', $id_users)->where('jenis_users','=',2)
                ->update(['status_users' => 0]);
    }
    function unbanpegawai($id_users) {
        Users::where('id_users', '=', $id_users)->where('jenis_users','=',2)
                ->update(['status_users' => 1]);
    }
}
