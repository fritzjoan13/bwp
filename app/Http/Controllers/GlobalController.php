<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Cabang;
use App\Models\Barang;
use App\Models\stokcabang;
use App\Models\HeaderTransaksi;
use App\Models\DetailTransaksi;
class GlobalController extends Controller
{
    public function login()
    {
        $title = "Login";
        return view("global.login", compact("title"));
    }

    public function register()
    {
        $title = "Register";
        return view("global.register", compact("title"));
    }
    public function postlogin(Request $req){
        /*
        $cabang=new Cabang();
        $rc=$cabang->getall();
        $barang=new Barang();
        $rb=$barang->getall();
        foreach($rc as $rowcb){
            //cabang
            $idcabang=$rowcb->id_cabang;
            foreach($rb as $rowbrg){
                //barang
                $idbarang=$rowbrg->id_barang;
                $sc=new stokcabang();
                $sc->insert_stokcabang($idcabang,$idbarang);
            };
        };
        */
        $username_user=$req->username_user;
        $password_user=$req->password_user;
        $modelUsers=new Users();
        $rowUsers=$modelUsers::where('username_users','=',$username_user)->where('password_users','=',$password_user)->first();
        if($rowUsers!=null){
            session()->put("userlogin", $rowUsers);
            if($rowUsers->jenis_users==1){                  // owner0815932580
                $modelCabang=new Cabang();
                $param['title']="Cabang";
                $param['cabang']=$modelCabang->getall();
                return view("owner.cabang",$param);
            }
            else if($rowUsers->jenis_users==2){             // agus0001
                $modelHtrans=new HeaderTransaksi();
                $param['dhtrans']=$modelHtrans->getall();;
                $param['title']= "Penjualan";
                return view("admin.penjualan", $param);
            }
            else if($rowUsers->jenis_users==3){             // anthon9293
                $title = "Dashboard";
                return redirect("/dashboard");
            }
        }
        else{
            echo("<script type='text/javascript'>alert('Username atau Password salah');</script>");
        }
        return view("global.login");
    }
    public function postregister(Request $req){
        echo('Masuk Register');
        $c=new Users();
        $nama_customer=$req->nama;
        $alamat_customer=$req->alamat;
        $nomor_customer=$req->no_telp;
        $username_customer=$req->username;
        $password_customer=$req->password;
        $confirm_password_customer=$req->cpassword;
        if($confirm_password_customer==$password_customer){

            //pengecekan duplikat belum ada
            $c->insert_customer($nama_customer,$alamat_customer,$nomor_customer,$username_customer,$password_customer);
        }
        else{
            echo('Masuk Konfirmasi Password Ga Berhasil');
            print('Masuk Konfirmasi Password Ga Berhasil');
        }
        return view("global.login");
    }
}
