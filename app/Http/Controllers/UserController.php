<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeranjangBelanja;
use App\Models\WishlistCustomer;
use App\Models\HeaderTransaksi;
use App\Models\DetailTransaksi;
use App\Models\Barang;
use App\Models\MerekBarang;
use App\Models\JenisBarang;

class UserController extends Controller
{
    public function dashboard()
    {
        $brg = new Barang();
        $param['title'] = "Dashboard";
        $param['brg'] = $brg->getall();
        return view("user.dashboard", $param);
    }

    public function detail($idbarang)
    {
        $brg = new Barang();
        $param['id'] = $idbarang;
        $param['brg'] = $brg->findByID($idbarang);
        $param['title'] = "Detail";
        return view("user.detail", $param);
    }

    public function hapuscart($index) {
        $arrcart = session()->get('cart') ?? [];
        array_splice($arrcart, $index, 1);
        session()->put('cart', $arrcart);
        return redirect('/cart');
    }

    public function addtocart($id, $value)
    {
        $arrcart = session()->get('cart') ?? [];
        $brg = new Barang();
        $dt = $brg->findByID($id);
        $dt->qty = $value;
        array_push($arrcart, $dt);
        session()->put('cart', $arrcart);
        return redirect('/cart');
    }

    public function cart()
    {
        $title = "Cart";
        return view("user.cart", compact("title"));
    }

    public function checkout()
    {
        $title = "Checkout";
        return view("user.checkout", compact("title"));
    }

    public function history()
    {
        $tr = new HeaderTransaksi();
        $param['datatrans'] = $tr->searchbyidcustomer(session()->get("userlogin")->id_users);
        $td = new DetailTransaksi();
        $param['detailtrans'] = $td->getall();
        $param['title'] = "History";
        return view("user.transaksi", $param);
    }

    public function postcheckout(Request $req)
    {
        $namapenerima = $req->namapenerima;
        $alamatpenerima = $req->alamatpenerima;
        $telppenerima = $req->telppenerima;
        $pengiriman = $req->pengiriman;
        $pembayaran = $req->metodepembayaran;
        $sum = $req->sum;

        $head = new HeaderTransaksi();
        $idtrans = $head->insert_headerTransaksi(
                    0,
                    session()->get('userlogin')->id_users,
                    date("Y-m-d"),
                    0,
                    $sum,
                    $namapenerima,
                    $alamatpenerima,
                    $telppenerima,$pembayaran,$pengiriman);

        foreach(session()->get('cart', []) as $row) {
            $det = new DetailTransaksi();
            $subtot = $row->harga_jual * $row->qty;
            $det->insert_detailtransaksi($idtrans, $row->id_barang, $row->qty, $row->harga_jual, $subtot);
        }

        // echo $idtrans;
        session()->forget("cart");
        return redirect("/history");
    }

    public function transaksi()
    {
        $title = "Transaksi";
        return view("user.transaksi", compact("title"));
    }

    public function detailTransaksi($id)
    {
        $param['title']="Detail Transaksi";
        $modelDtrans=new DetailTransaksi();
        $modelHtrans=new HeaderTransaksi();
        $id_users=session()->get('userlogin')->id_users;
        $param['datadtrans']=$modelDtrans->findbyidHtrans($id);
        $param['datahtrans']=$modelHtrans->searchbyidhtrans($id);
        return view("user.detail_transaksi", $param);
    }

}
