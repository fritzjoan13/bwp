<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cabang;
use App\Models\Barang;
use App\Models\Users;
use App\Models\HeaderTransaksi;
use App\Models\DetailTransaksi;
use App\Models\RequestStok;
use App\Models\stokcabang;

class AdminController extends Controller
{

    public function penjualan()
    {
        $modelHtrans=new HeaderTransaksi();
        $param['dhtrans']=$modelHtrans->getall();;
        $param['title']= "Penjualan";
        return view("admin.penjualan", $param);
    }

    public function detailPenjualan($id)
    {
        $modelDtrans=new DetailTransaksi();
        $modelHtrans=new HeaderTransaksi();
        $modelPegawai=new Users();
        $id_users=session()->get('userlogin')->id_users;
        $param['datadtrans']=$modelDtrans->findbyidHtrans($id);
        $param['datahtrans']=$modelHtrans->searchbyidhtrans($id);
        $param['datapegawai']=$modelPegawai->findByID($id);
        $param['title']= "Detail";
        return view("admin.detail", $param);
    }
    public function updatestatustransaksi($id) {
        $dt = HeaderTransaksi::where('id_transaksi','=',$id)->first();
        $id_pegawai =session()->get('userlogin')->id_users;
        $modelUsers=new Users();
        $rowUsers=$modelUsers->findByID($id_pegawai);
        $idcabang=$rowUsers->id_cabang;

        if($dt->status_transaksi==0){
            $dt->status_transaksi = 1;
            $dt->id_cabang=$idcabang;
            $dt->id_pegawai=$id_pegawai;
            $dt->save();
        }
        else if($dt->status_transaksi==1){
            $dt->status_transaksi = 2;
            $dt->save();
        }
        else if($dt->status_transaksi==2){
            $dt->status_transaksi = 3;
            $dt->save();
        }
        return redirect("/admin");
    }
    public function requestStokAdmin()
    {
        $modelReqStok=new RequestStok();
        $id_users=session()->get('userlogin')->id_users;
        $param['reqstok']= $modelReqStok->getbyIDPegawai($id_users);
        $param['title']= "Request Stok";
        return view("admin.requestStok",$param);
    }

    public function form()
    {
        $modelBarang=new Barang();
        $modelCabang=new Cabang();
        $param['barang']=$modelBarang->getall();
        $param['cabang']=$modelCabang->getall();
        $param['title']= "Form Request Stok";
        return view("admin.form",$param);
    }
    public function postRequestForm(Request $req){
        $idbarang=$req->nama;
        $jumlah=$req->jumlah;
        $idcabang=$req->cabang;
        $id_users=$req->id_users;
        $tanggal=date("Y-m-d");
        $modelReqStok=new RequestStok();
        $row=$modelReqStok->insert_request($id_users,$idbarang,$idcabang,$jumlah,$tanggal);

        return redirect("/admin/requestStok");
    }
    public function stokOpname(){
        $modelStokCabang=new stokcabang();
        $id_users=session()->get('userlogin')->id_users;
        $rowuser=Users::find($id_users);
        $id_cabang=$rowuser->id_cabang;
        $param['stokopname']=$modelStokCabang->getbyIDCabang($id_cabang);
        $param['title']= "List Stok Opname";
        return view("admin.stokopname",$param);
    }
    public function postStokOpname(Request $req){
        $jumlah=$req->jumlah;
        $idcabang=$req->id_cabang;
        $idbarang=$req->id_barang;
        $modelStokCabang=new stokcabang();
        $modelbarang=new Barang();
        $rowSekarang=$modelStokCabang->searchforAddStok($idcabang,$idbarang);
        $rowAkhir=$modelStokCabang->addstokcabang($idcabang,$idbarang,$jumlah);

        return redirect("/admin/stokopname");
    }
}
