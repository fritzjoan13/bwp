@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-full">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Edit Barang</h2>
                <a href="{{route('login')}}"><button class="btn btn-primary text-primary bg-white mx-3 w-32">
                    Logout
                </button></a>
            </div>
            <form method="post" action="{!! url('editBarang'); !!}" enctype="multipart/form-data">
                @csrf
            <div class="container">
                <div class="box" style="height: 120vh; width: 51vw; margin-left: 15vw; margin-top: 3vh; background-color: lightgrey; border: 1px solid">
                    <div style="margin-top: 4vh; margin-left: 5vw">
                        <input type="hidden" name="id_barang" value="{{$databarang->id_barang}}">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" style="width: 40vw; height: 4vh; border: 1px solid" value="{{$databarang->nama_barang}}">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" style="width: 40vw; height: 20vh; border: 1px solid" value="{{$databarang->deskripsi_barang}}">
                        </div>
                        <div class="mb-3">
                            <label for="harga_modal" class="form-label">Harga Modal</label>
                            <input type="text" class="form-control" id="harga_modal" name="harga_modal" style="width: 15vw; height: 4vh; border: 1px solid" value="{{$databarang->harga_modal}}">
                        </div>
                        <div class="mb-3">
                            <label for="harga_jual" class="form-label">Harga Jual</label>
                            <input type="text" class="form-control" id="harga_jual" name="harga_jual" style="width: 15vw; height: 4vh; border: 1px solid" value="{{$databarang->harga_jual}}">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" style="width: 10vw; height: 4vh; border: 1px solid" value="{{$databarang->stok_barang}}">
                        </div>
                        <div class="mb-3">
                            <label for="id_cabang" class="form-label">ID Jenis</label>
                            <select class="form-control" name="id_jenis">
                                @foreach($datajenis as $row)
                                    @if($row->id_jenis == $databarang->id_jenis)
                                        <option selected value='{{ $row->id_jenis}}'>{{ $row->nama_jenis }}</option>
                                    @else
                                        <option value='{{ $row->id_jenis}}'>{{ $row->nama_jenis }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_cabang" class="form-label">ID Merek</label>
                            <select class="form-control" name="id_merek">
                                @foreach($datamerek as $row)
                                    @if($row->id_merek == $databarang->id_merek)
                                        <option selected value='{{ $row->id_merek}}'>{{ $row->nama_merek }}</option>
                                    @else
                                        <option value='{{ $row->id_merek}}'>{{ $row->nama_merek }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <img src="{{asset('produk/'.$databarang->foto_barang)}}" class="w-32 h-32">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" style="width: 15vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="flex">
                            <button class="btn btn-primary text-white mt-4 mr-3">Edit</button>
                            <button class="btn btn-success text-white mt-4 mr-3">Aktifkan</button>
                            <button class="btn btn-error text-white mt-4">Nonaktikan</button>
                        </div>
                    </div>
                </div>
            </div>
            <br /><br />
            </form>
        </div>
    </div>
@endsection
