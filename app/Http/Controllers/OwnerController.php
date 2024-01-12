<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerekBarang;
use App\Models\JenisBarang;
use App\Models\Barang;
use App\Models\Cabang;
use App\Models\Users;
use App\Models\RequestStok;
use App\Models\stokcabang;
use App\Models\HeaderTransaksi;
use App\Models\DetailTransaksi;
class OwnerController extends Controller
{
    public function cabang()
    {
        $modelCabang=new Cabang();
        $param['title']="Cabang";
        $param['cabang']=$modelCabang->getall();
        return view("owner.cabang",$param);
    }

    public function aktifkancabang($id) {
        $dt = Cabang::find($id);
        $dt->status_cabang = 1;
        $dt->save();
        return redirect("/owner");
    }

    public function nonaktifkancabang($id) {
        $dt = Cabang::find($id);
        $dt->status_cabang = 0;
        $dt->save();
        return redirect("/owner");
    }

    public function pegawai()
    {
        $modelPegawai=new Users();
        $param['title']="Pegawai";
        $param['pegawai']=$modelPegawai->getpegawai();
        return view("owner.pegawai",$param);
    }

    public function aktifkanpegawai($id) {
        $dt = Users::find($id);
        $dt->status_users = 1;
        $dt->save();
        return redirect("/owner/pegawai");
    }

    public function nonaktifkanpegawai($id) {
        $dt = Users::find($id);
        $dt->status_users = 0;
        $dt->save();
        return redirect("/owner/pegawai");
    }

    public function customer()
    {
        $modelCustomer=new Users();
        $param['title']="Customer";
        $param['customer']=$modelCustomer->getcustomers();
        return view("owner.customer",$param);
    }

    public function aktifkancustomer($id) {
        $dt = Users::find($id);
        $dt->status_users = 1;
        $dt->save();
        return redirect("/owner/customer");
    }

    public function nonaktifkancustomer($id) {
        $dt = Users::find($id);
        $dt->status_users = 0;
        $dt->save();
        return redirect("/owner/customer");
    }

    public function barang()
    {
        $modelBarang=new Barang();
        $param['title']="Barang";
        $param['barang']=$modelBarang->getall();
        return view("owner.barang", $param);
    }
    public function aktifkanbarang($id)
    {
        $dt = Barang::find($id);
        $dt->status_barang = 1;
        $dt->save();
        return redirect("/owner/barang");
    }
    public function nonaktifkanbarang($id)
    {
        $dt = Barang::find($id);
        $dt->status_barang = 0;
        $dt->save();
        return redirect("/owner/barang");
    }

    public function merek()
    {
        $modelMerek=new MerekBarang();
        $param['title']="Merek";
        $param['merek']=$modelMerek->getall();
        return view("owner.merek", $param);
    }
    public function aktifkanmerek($id) {
        $dt = MerekBarang::find($id);
        $dt->status_merek = 1;
        $dt->save();
        return redirect("/owner/merek");
    }
    public function nonaktifkanmerek($id) {
        $dt = MerekBarang::find($id);
        $dt->status_merek = 0;
        $dt->save();
        return redirect("/owner/merek");
    }

    public function jenis()
    {
        $modelJenis=new JenisBarang();
        $param['title']="Jenis";
        $param['jenis']=$modelJenis->getall();
        return view("owner.jenis",  $param);
    }
    public function aktifkanjenis($id) {
        $dt = JenisBarang::find($id);
        $dt->status_jenis = 1;
        $dt->save();
        return redirect("/owner/jenis");
    }
    public function nonaktifkanjenis($id) {
        $dt = JenisBarang::find($id);
        $dt->status_jenis = 0;
        $dt->save();
        return redirect("/owner/jenis");
    }



    public function laporan()
    {
        $modelLaporan=new HeaderTransaksi();
        $param['title']="Laporan";
        $param['laporan']=$modelLaporan->getlaporan();
        return view("owner.laporan", $param);
    }
    public function detailLaporan($id){
        $modelDtrans=new DetailTransaksi();
        $modelHtrans=new HeaderTransaksi();

        $param['datadtrans']=$modelDtrans->findbyidHtrans($id);
        $param['datahtrans']=$modelHtrans->searchbyidhtrans($id);
        $param['title']="Detail Laporan";
        return view('owner.modal_item', $param);
        //return redirect("/owner/laporan");
    }

    public function stokcabang()
    {
        $modelStokCabang=new stokcabang();
        $param['title']="Stok Cabang";
        $param['stokcabang']=$modelStokCabang->getall();
        return view("owner.stokcabang", $param);
    }

    public function requestStokOwner()
    {
        $modelRequestStok=new RequestStok();
        $param['reqstok']=$modelRequestStok->getall();
        $param['title']="Request Stok";
        return view("owner.requeststok", $param);
    }
    public function acceptrequeststok($id)
    {
        $modelStokCabang=new stokcabang();
        $dt = RequestStok::find($id);
        $jumlah_ditambahkan=$dt->jumlah_ditambahkan;
        $id_cabang=$dt->id_cabang;
        $id_barang=$dt->id_barang;

        $dtstokcabang=$modelStokCabang->searchforAddStok($id_cabang,$id_barang);
        if($dtstokcabang!=null){
            $query=$modelStokCabang->addstokcabang($id_cabang,$id_barang,$jumlah_ditambahkan);
        }
        return redirect("/owner/requestStok");
    }
    public function rejectrequeststok($id)
    {
        $dt = RequestStok::find($id);
        $dt->status_request = 2;
        $dt->save();
        return redirect("/owner/requestStok");
    }
    public function addCabang()
    {
        $title = "Add Cabang";
        return view("owner.addCabang", compact("title"));
    }

    public function editCabang($id)
    {
        $modelCabang=new Cabang();
        $param['title']="Edit Cabang";
        $param['datacabang']=$modelCabang->findByID($id);
        return view("owner.editCabang", $param);
    }

    public function addPegawai()
    {
        $title = "Add Pegawai";
        return view("owner.addPegawai", compact("title"));
    }

    public function editPegawai($id)
    {
        $modelPegawai=new Users();
        $param['title']="Edit Pegawai";
        $param['datapegawai']=$modelPegawai->findByID($id);
        $cbg = new Cabang();
        $param['datacabang'] = $cbg->getall();
        return view("owner.editPegawai", $param);
    }

    public function addBarang()
    {
        $jns = new JenisBarang();
        $param['datajenis'] = $jns->getall();
        $mrk = new MerekBarang();
        $param['datamerek'] = $mrk->getall();
        $param['title'] = "Add Barang";
        return view("owner.addBarang", $param);
    }

    public function editBarang($id)
    {
        $jns = new JenisBarang();
        $param['datajenis'] = $jns->getall();
        $mrk = new MerekBarang();
        $param['datamerek'] = $mrk->getall();
        $brg = new Barang();
        $param['databarang'] = $brg->findByID($id);
        $param['title'] = "Edit Barang";
        return view("owner.editBarang", $param);
    }

    public function addMerek()
    {
        $title = "Add Merek";
        return view("owner.addMerek", compact("title"));
    }

    public function editMerek($id)
    {
        $mrk = new MerekBarang();
        $param['datamerek'] = $mrk->where('id_merek','=',$id)->first();
        $param['title'] = "Edit Merek";
        return view("owner.editMerek", $param);
    }

    public function addJenis()
    {
        $title = "Add Jenis";
        return view("owner.addJenis", compact("title"));
    }

    public function editJenis($id)
    {
        $modelJenis=new JenisBarang();
        $param['title'] = "Edit Jenis";
        $param['datajenis']=$modelJenis->findByID($id);
        return view("owner.editJenis", $param);
    }

    public function postInsertMerekBarang(Request $req){
        echo('Masuk postInsertMerekBarang');
        $m=new MerekBarang();
        $nama_merek=$req->nama;
        $deskripsi_merek=$req->deskripsi;
        $res=$m->insert_merek($nama_merek,$deskripsi_merek);
        if($res=="merek already exist"){
            echo('Data Merek Sudah Ada');
        }
        else{
            echo('Merek Barang Berhasil Dimasukkan');
        }
        return redirect('/owner/merek');}
    public function postUpdateMerekBarang(Request $req){
        //$row=MerekBarang::find($req->id_merek);
        $modelMerekBarang= new MerekBarang();
        $row=$modelMerekBarang->where('id_merek','=',$req->id)->first();
        if($row==null){echo("data not found");}
        else{
            $row->nama_merek=$req->nama;
            $row->deskripsi_merek=$req->deskripsi;
            $row->save();
        }
        return redirect('owner/merek');
    }
    public function postDeleteMerekBarang(Request $req){
        $modelMerekBarang= new MerekBarang();
        $row=$modelMerekBarang->where('id_merek','=',$req->id)->first();
        if($row==null){echo("data not found");}
        else{
            $row->status_merek=0;
            $row->save();
        }        return redirect('/owner/merek');
    }
    public function postInsertJenisBarang(Request $req){
        echo('Masuk postInsertJenisBarang');
        $j=new JenisBarang();
        $nama_jenis=$req->nama;

        $res=$j->insert_jenis($nama_jenis);
        if($res=="jenis already exist"){
            echo('Data Jenis Sudah Ada');
        }
        else{
            echo('Jenis Barang Berhasil Dimasukkan');
        }        return redirect('/owner/jenis');
    }
    public function postUpdateJenisBarang(Request $req){
        $modelJenisBarang=new JenisBarang();
        $row=$modelJenisBarang->where('id_jenis','=',$req->id)->first();
        if($row==null){echo("data not found");}
        else{
            $row->nama_jenis=$req->nama;
            $row->save();
        }
        return redirect('owner/jenis');
    }
    public function postDeleteJenisBarang(Request $req){
        $modelJenisBarang=new JenisBarang();
        $row=$modelJenisBarang->where('id_jenis','=',$req->id)->first();
        if($row==null){echo("data not found");}
        else{
            $row->status_jenis=0;
            $row->save();
        }
        return redirect('/owner/jenis');    }

    public function postInsertCabang(Request $req){
        print('Masuk postInsertCabang');
        $cb=new Cabang();
        $nama_cabang=$req->nama;
        $alamat_cabang=$req->alamat;
        $nomor_cabang=$req->no_telp;

        $res=$cb->insert_cabang($nama_cabang,$alamat_cabang,$nomor_cabang);
        if($res=="cabang already exist"){
            print('Data Cabang Sudah Ada');
        }
        else{
            $barang=new Barang();
            $resbarang=$barang->getall();
            foreach($resbarang as $rowbrg){
            $sc=new stokcabang();
            $sc->insert_stokcabang($res,$rowbrg->id_barang);
            };
        }
        return redirect('/owner');

        // $param['title']="Cabang";
        // $param['cabang']=$cb->getall();
        // return view("owner.cabang",$param);
    }
    public function postUpdateCabang(Request $req){
        $modelCabang=new Cabang();
        $row=$modelCabang->where('id_cabang','=',$req->id)->first();
        if($row==null){echo("data not found");}
        else{
            $row->nama_cabang=$req->nama;
            $row->alamat_cabang=$req->alamat;
            $row->nomor_cabang=$req->no_telp;
            $row->save();
        }
        return redirect('/owner');
    }

    public function postDeleteCabang(Request $req){
        $modelCabang=new Cabang();
        $row=$modelCabang->where('id_cabang','=',$req->id)->first();
        if($row==null){echo("data not found");}
        else{
            $row->status_cabang=0;
            $row->save();
        }
    }
    public function postInsertPegawai(Request $req){
        echo('Masuk postInsertPegawai');
        $pg=new Users();
        $nama_pegawai=$req->nama;
        $alamat_pegawai=$req->alamat;
        $nomor_pegawai=$req->no_telp;
        $id_cabang=$req->id_cabang;
        $username_pegawai=$req->username;
        $password_pegawai=$req->password;
        $confirm_password_pegawai=$req->cpass;
        if($password_pegawai==$confirm_password_pegawai){
            $res=$pg->insert_pegawai($id_cabang,$nama_pegawai,$alamat_pegawai,$nomor_pegawai,$username_pegawai,$password_pegawai);
            if($res=="pegawai already exist"){
                echo('Data Pegawai Sudah Ada');
            }
            else{
                echo('Pegawai Berhasil Dimasukkan');
            }
        }
        else{

        }

        return redirect('/owner/pegawai');    }
    public function postUpdatePegawai(Request $req){
        $modelPegawai=new Users();
        $row=$modelPegawai->where('id_users','=',$req->id)->first();
        if($row==null){echo("data not found");}
        else{
            $row->nama_users=$req->nama;
            $row->alamat_users=$req->alamat;
            $row->nomer_users=$req->no_telp;
            $row->id_cabang=$req->id_cabang;
            $row->username_users=$req->username;
            $row->password_users=$req->password;
            $row->save();
        }
        return redirect('/owner/pegawai');
    }
    public function postDeletePegawai(Request $req){
        $modelPegawai=new Users();
        $row=$modelPegawai->where('id_users','=',$req->id)->where('jenis_users','=',2)->first();
        if($row==null){echo("data not found");}
        else{
            $row->status_pegawai=0;
            $row->save();
        }
    }
    public function postInsertBarang(Request $req){
        if($req->hasFile('foto'))
        {
            $filefoto = $req->file('foto');
            $namafile  = $filefoto->getClientOriginalName();
            $destpath = 'produk';
            $filefoto->move($destpath, $namafile);
        }
        else
        { $namafile = "default.png"; }

        $id_merek       = $req->id_merek;
        $id_jenis       = $req->id_jenis;
        $nama_barang    = $req->nama;
        $deskripsi_barang=$req->deskripsi;
        $harga_modal    = $req->harga_modal;
        $harga_jual     = $req->harga_jual;
        $stok_barang    = $req->stok;
        $foto_barang    = $namafile;

        $brg            = new Barang();
        $res            = $brg->insert_barang($id_merek, $id_jenis, $nama_barang, $deskripsi_barang, $harga_modal,$harga_jual, $stok_barang, $foto_barang);

        $cabang=new Cabang();
        $rescabang=$cabang->getall();
        foreach($rescabang as $rowcb){
            $sc=new stokcabang();
            $sc->insert_stokcabang($rowcb->id_cabang,$res);
        };

        if($res=="barang already exist"){
            echo('Data Barang Sudah Ada');
        }
        else{
            echo('Barang Berhasil Dimasukkan');
        }
        return redirect('/owner/barang');
    }

    public function postUpdateBarang(Request $req){

        if($req->hasFile('foto'))
        {
            $filefoto = $req->file('foto');
            $namafile  = $filefoto->getClientOriginalName();
            $destpath = 'produk';
            $filefoto->move($destpath, $namafile);
        }
        else
        { $namafile = ""; }

        $row            =   Barang::where('id_barang','=',$req->id_barang)->first();
        $row->id_merek  =   $req->id_merek;
        $row->id_jenis  =   $req->id_jenis;
        $row->nama_barang=  $req->nama;
        $row->deskripsi_barang = $req->deskripsi;
        $row->harga_modal=  $req->harga_modal;
        $row->harga_jual =  $req->harga_jual;
        $row->stok_barang=  $req->stok;
        if($namafile != "") {
            $row->foto_barang=  $namafile;
        }
        $row->save();

        return redirect('/owner/barang');
    }
    public function postUpdateCustomer(Request $req){
        $modelCustomer=new Users();
        $row=$modelCustomer->where('id_users','=',$req->id)->first();
        if($row==null){echo("data not found");}
        else{

            $row->nama_users=$req->nama;
            $row->alamat_users=$req->alamat;
            $row->nomer_users=$req->no_telp;
            $row->username_users=$req->username;
            $row->password_users=$req->password;
            $row->save();
        }
        return redirect('/owner/customer');
    }

}
