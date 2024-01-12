@extends('layout.app')

@section('content')
    <div class="flex">
        <div class="w-full">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Welcome Pegawai</h2>
                <div class="flex">
                    <a href="{{route('penjualan')}}" class="btn btn-primary bg-white mx-3 text-black hover:text-white">Penjualan</a>
                    <a href="{{route('requestStokAdmin')}}" class="btn btn-primary bg-white text-black hover:text-white">Request Stock</a>
                    <a href="{{route('stokOpname')}}" class="btn btn-primary bg-white mx-3 text-black hover:text-white">Stock Opname</a>
                </div>
                <a href="{{route('login')}}"><button class="btn btn-primary text-primary bg-white mx-3 w-32">Logout</button></a>
            </div>

            <h1 class="text-lg text-center mt-5 text-bold">FORM REQUEST STOK BARANG</h1>
            <form method="post" action="{!! url('addform'); !!}">
                @csrf
            <input type=hidden name="id_users"value={{session()->get("userlogin")->id_users}}>
            <div class="container">
                <div class="box" style="height: 75vh; width: 82vw; margin: auto; margin-top: 3vh; background-color: white; border: 1px solid">
                    <div style="margin-top: 4vh; margin-left: 5vw">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Barang</label>
                            <br>
                            <select name="nama" id="nama" style="width: 20vw; height: 4vh; border: 1px solid; background-color: lightgrey">
                                @foreach($barang as $rowBarang)
                                <option value='{{ $rowBarang->id_barang}}'>{{ $rowBarang->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" style="width: 10vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="cabang" class="form-label">Cabang</label>
                            <br>
                            <select name="cabang" id="cabang" style="width: 20vw; height: 4vh; border: 1px solid; background-color: lightgrey">
                                @foreach($cabang as $rowCabang)
                                <option value='{{ $rowCabang->id_cabang}}'>{{ $rowCabang->nama_cabang }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary text-white">Request</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
