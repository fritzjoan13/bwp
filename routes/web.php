<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/dashboard", [UserController::class, "dashboard"])->name("dashboard");

Route::get("/detail/{idbarang}", [UserController::class, "detail"])->name("detail");

Route::get("/addtocart/{id}/{value}", [UserController::class, "addtocart"])->name("addtocart");

Route::get("/hapuscart/{index}", [UserController::class, "hapuscart"])->name("hapuscart");


Route::get("/cabang/aktifkan/{id}", [OwnerController::class, "aktifkancabang"])->name("aktifkancabang");
Route::get("/cabang/nonaktifkan/{id}", [OwnerController::class, "nonaktifkancabang"])->name("nonaktifkancabang");
Route::get("/pegawai/aktifkan/{id}", [OwnerController::class, "aktifkanpegawai"])->name("aktifkanpegawai");
Route::get("/pegawai/nonaktifkan/{id}", [OwnerController::class, "nonaktifkanpegawai"])->name("nonaktifkanpegawai");
Route::get("/customer/aktifkan/{id}", [OwnerController::class, "aktifkancustomer"])->name("aktifkancustomer");
Route::get("/customer/nonaktifkan/{id}", [OwnerController::class, "nonaktifkancustomer"])->name("nonaktifkancustomer");
Route::get("/jenis/aktifkan/{id}", [OwnerController::class, "aktifkanjenis"])->name("aktifkanjenis");
Route::get("/jenis/nonaktifkan/{id}", [OwnerController::class, "nonaktifkanjenis"])->name("nonaktifkanjenis");
Route::get("/merek/aktifkan/{id}", [OwnerController::class, "aktifkanmerek"])->name("aktifkanmerek");
Route::get("/merek/nonaktifkan/{id}", [OwnerController::class, "nonaktifkanmerek"])->name("nonaktifkanmerek");
Route::get("/barang/aktifkan/{id}", [OwnerController::class, "aktifkanbarang"])->name("aktifkanbarang");
Route::get("/barang/nonaktifkan/{id}", [OwnerController::class, "nonaktifkanbarang"])->name("nonaktifkanbarang");
Route::get("/requestStok/accept/{id}", [OwnerController::class, "acceptrequeststok"])->name("acceptrequeststok");
Route::get("/requestStok/reject/{id}", [OwnerController::class, "rejectrequeststok"])->name("rejectrequeststok");

Route::get("/laporan/{id}", [OwnerController::class, "detailLaporan"])->name("detailLaporan");
Route::get("/detail/update/{id}", [AdminController::class, "updatestatustransaksi"])->name("updatestatustransaksi");

Route::get("/cart", [UserController::class, "cart"])->name("cart");

Route::get("/history", [UserController::class, "history"])->name("history");

Route::get("/checkout", [UserController::class, "checkout"])->name("checkout");
Route::post("/postcheckout", [UserController::class, "postcheckout"])->name("postcheckout");

Route::get("/transaksi", [UserController::class, "transaksi"])->name("transaksi");

Route::get("/detailTransaksi/{id}", [UserController::class, "detailTransaksi"])->name("detailTransaksi");

Route::get("/owner", [OwnerController::class, "cabang"])->name("cabang");

Route::get("/owner/pegawai", [OwnerController::class, "pegawai"])->name("pegawai");

Route::get("/owner/customer", [OwnerController::class, "customer"])->name("customer");

Route::get("/owner/barang", [OwnerController::class, "barang"])->name("barang");

Route::get("/owner/merek", [OwnerController::class, "merek"])->name("merek");

Route::get("/owner/jenis", [OwnerController::class, "jenis"])->name("jenis");

Route::get("/owner/laporan", [OwnerController::class, "laporan"])->name("laporan");

Route::get("/owner/stokcabang", [OwnerController::class, "stokcabang"])->name("stokcabang");

Route::get("/owner/requestStok", [OwnerController::class, "requestStokOwner"])->name("requestStokOwner");

Route::get("/owner/addCabang", [OwnerController::class, "addCabang"])->name("addCabang");

Route::get("/owner/editCabang/{id}", [OwnerController::class, "editCabang"])->name("editCabang");

Route::get("/owner/addPegawai", [OwnerController::class, "addPegawai"])->name("addPegawai");

Route::get("/owner/editPegawai/{id}", [OwnerController::class, "editPegawai"])->name("editPegawai");

Route::get("/owner/addBarang", [OwnerController::class, "addBarang"])->name("addBarang");

Route::get("/owner/editBarang/{id}", [OwnerController::class, "editBarang"])->name("editBarang");

Route::get("/owner/addMerek", [OwnerController::class, "addMerek"])->name("addMerek");

Route::get("/owner/editMerek/{id}", [OwnerController::class, "editMerek"])->name("editMerek");

Route::get("/owner/addJenis", [OwnerController::class, "addJenis"])->name("addJenis");

Route::get("/owner/editJenis/{id}", [OwnerController::class, "editJenis"])->name("editJenis");

Route::get("/admin", [AdminController::class, "penjualan"])->name("penjualan");

Route::get("/admin/detail/{id}", [AdminController::class, "detailPenjualan"])->name("detailPenjualan");

Route::get("/admin/requestStok", [AdminController::class, "requestStokAdmin"])->name("requestStokAdmin");

Route::get("/admin/form", [AdminController::class, "form"])->name("form");

Route::get("/admin/stokopname", [AdminController::class, "stokOpname"])->name("stokOpname");

Route::get("/", [GlobalController::class, "login"])->name("login");

Route::get("/register", [GlobalController::class, "register"])->name("register");

Route::post("/", [GlobalController::class, "postlogin"])->name("postlogin");
Route::post("/register", [GlobalController::class, "postregister"])->name("postregister");
Route::post("/addMerek", [OwnerController::class, "postInsertMerekBarang"])->name("postInsertMerekBarang");
Route::post("/addJenis", [OwnerController::class, "postInsertJenisBarang"])->name("postInsertJenisBarang");
Route::post("/addCabang", [OwnerController::class, "postInsertCabang"])->name("postInsertCabang");
Route::post("/addPegawai", [OwnerController::class, "postInsertPegawai"])->name("postInsertPegawai");
Route::post("/addBarang", [OwnerController::class, "postInsertBarang"])->name("postInsertBarang");
Route::post("/editJenis", [OwnerController::class, "postUpdateJenisBarang"])->name("postUpdateJenisBarang");
Route::post("/editMerek", [OwnerController::class, "postUpdateMerekBarang"])->name("postUpdateMerekBarang");
Route::post("/editPegawai", [OwnerController::class, "postUpdatePegawai"])->name("postUpdatePegawai");
Route::post("/editCabang", [OwnerController::class, "postUpdateCabang"])->name("postUpdateCabang");
Route::post("/editBarang", [OwnerController::class, "postUpdateBarang"])->name("postUpdateBarang");

Route::post("/addform", [AdminController::class, "postRequestForm"])->name("postRequestForm");
Route::post("/postStokOpname", [AdminController::class, "postStokOpname"])->name("postStokOpname");


