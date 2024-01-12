@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-5/6">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Master Cabang</h2>
                <input type="text" placeholder="Search" style="height: 5vh; padding: 1vw; border-radius: 5px">
                <a href="{{route('login')}}"><button class="btn btn-primary text-primary bg-white mx-3 w-32">Logout</button></a>
            </div>

            <div class="flex justify-between my-5 mx-3">
                <h2 class="invisible">invisible</h2>
                <h2 class="text-xl text-primary font-bold ml-5">List Cabang</h2>
                <a href="{{route('addCabang')}}" class="btn btn-primary bg-blue-950 text-white">Tambah</a>
            </div>

            <table  class="table table-auto w-full mt-3 mx-3">
                <thead>
                  <tr class="text-xl text-black">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Status</th>
                    <th class="w-[20%]">Action</th>
                  </tr>
                </thead>
                <tbody>

                        @foreach ($cabang as $c)
                            <tr>
                                <td class="text-left font-bold text-lg">{{$c->id_cabang}}</td>
                                <td class="text-left font-bold text-lg">{{$c->nama_cabang}}</td>
                                <td class="text-left font-bold text-lg">{{$c->alamat_cabang}}</td>
                                <td class="text-left font-bold text-lg">{{$c->nomor_cabang}}</td>
                                <td class="text-center font-bold text-lg">{{$c->status_cabang == 1 ? "Aktif" : "NonAktif"}}</td>
                                <td class="flex">
                                    <a href="{!! url('owner/editCabang/'.$c->id_cabang); !!}" class="btn btn-success bg-white text-primary text-xs hover:text-white mr-3">Edit</a>
                                    @if($c->status_cabang == 1)
                                        <a href="{!! url('cabang/nonaktifkan/'.$c->id_cabang); !!}" class="btn btn-error bg-white text-red-400 hover:text-white">Nonaktif</a>
                                    @else
                                        <a href="{!! url('cabang/aktifkan/'.$c->id_cabang); !!}" class="btn btn-error bg-white text-red-400 hover:text-white">Aktif</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                </tbody>
              </table>
        </div>
    </div>
@endsection
