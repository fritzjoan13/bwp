@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-5/6">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Master Barang</h2>
                <input type="text" placeholder="Search" style="height: 5vh; padding: 1vw; border-radius: 5px">
                <a href="{{route('login')}}"><button
                    class="btn btn-primary text-primary bg-white mx-3 w-32">Logout</button></a>
            </div>
            <div class="flex justify-between my-5 w-full">
                <!-- <h2 class="invisible">invisible</h2> -->

                <h2 class="text-xl text-primary font-bold mr-5" style="margin-left: 38vw;">List Barang</h2>
                <a href="{{route('addBarang')}}" class="btn btn-primary bg-blue-950 text-white">Tambah</a>
            </div>

            <div class="flex justify-between my-5 w-full">
                <table class="table table-auto w-full">
                    <thead>
                    <tr class="text-xl text-black">
                        {{-- <th>Merek</th>
                        <th>Jenis</th> --}}
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Stok Barang</th>
                        <th>Status</th>
                        <th class="w-[15%]">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $brg)
                        <tr>
                            {{-- <td>{{$brg->nama_merek}}</td>
                            <td>{{$brg->nama_jenis}}</td> --}}
                            <td><img src="{{asset('produk/'.$brg->foto_barang)}}" class="w-32 h-32"></td>
                            <td>
                                <label class="text-lg font-bold">{{$brg->nama_barang}}</label><br />
                                <label class="text-base text-red-800 font-bold">Merek : {{$brg->Merek->nama_merek}}</label><br />
                                <label class="text-base text-red-800 font-bold">Jenis : {{$brg->Jenis->nama_jenis}}</label><br />
                            </td>
                            <td class="text-right font-bold text-lg">{{ number_format($brg->harga_jual) }}</td>
                            <td class="text-right font-bold text-lg">{{$brg->stok_barang}}</td>
                            <td class="text-center font-bold text-lg">{{$brg->status_barang == 1 ? "Aktif" : "NonAktif"}}</td>
                            <td class="flex">
                                <a href="{!! url('owner/editBarang/'.$brg->id_barang); !!}" class="btn btn-success bg-white text-primary text-xs hover:text-white mr-3">Edit</a>
                                @if($brg->status_barang == 1)
                                    <a href="{!! url('barang/nonaktifkan/'.$brg->id_barang); !!}" class="btn btn-error bg-white text-red-400 hover:text-white">Nonaktif</a>
                                @else
                                    <a href="{!! url('barang/aktifkan/'.$brg->id_barang); !!}" class="btn btn-error bg-white text-red-400 hover:text-white">Aktif</a>
                                @endif
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
