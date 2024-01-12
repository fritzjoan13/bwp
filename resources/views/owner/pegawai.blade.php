@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-5/6">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Master Pegawai</h2>
                <input type="text" placeholder="Search" style="height: 5vh; padding: 1vw; border-radius: 5px">
                <a href="{{route('login')}}"><button
                    class="btn btn-primary text-primary bg-white mx-3 w-32">Logout</button></a>
            </div>

            <div class="flex justify-between my-5 mx-3">
                <h2 class="invisible">invisible</h2>
                <h2 class="text-xl text-primary font-bold ml-5">List Pegawai</h2>
                <a href="{{route('addPegawai')}}" class="btn btn-primary bg-blue-950 text-white">Tambah</a>
            </div>

            <table  class="table table-auto w-full mt-3 mx-3">
                <thead>
                  <tr class="text-xl text-black">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Status</th>
                    <th class="w-[15%]">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $p)
                    <tr>
                        <td class="text-left font-bold text-lg">{{$p->id_users}}</td>
                        <td class="text-left font-bold text-lg">
                            <label class="text-lg font-bold"> {{$p->nama_users}}</label><br />
                            <label class="text-base text-red-800 font-bold">Username : {{$p->username_users}}</label><br />
                        </td>
                        <td class="text-left font-bold text-lg">{{$p->alamat_users}}</td>
                        <td class="text-left font-bold text-lg">{{$p->nomer_users}}</td>
                        <td class="text-center font-bold text-lg">{{$p->status_users == 1 ? "Aktif" : "NonAktif"}}</td>
                        <td class="flex">
                            <a href="{!! url('owner/editPegawai/'.$p->id_users); !!}" class="btn btn-success bg-white text-primary text-xs hover:text-white mr-3">Edit</a>
                            @if($p->status_users == 1)
                            <a href="{!! url('pegawai/nonaktifkan/'.$p->id_users); !!}" class="btn btn-error bg-white text-red-400 hover:text-white">Nonaktif</a>
                             @else
                            <a href="{!! url('pegawai/aktifkan/'.$p->id_users); !!}" class="btn btn-error bg-white text-red-400 hover:text-white">Aktif</a>
                             @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
