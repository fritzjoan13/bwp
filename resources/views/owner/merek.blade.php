@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-5/6">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Master Merek</h2>
                <input type="text" placeholder="Search" style="height: 5vh; padding: 1vw; border-radius: 5px">
                <a href="{{route('login')}}"><button
                    class="btn btn-primary text-primary bg-white mx-3 w-32">Logout</button></a>
            </div>

            <div class="flex justify-between my-5 mx-3">
                <!-- <h2 class="invisible">invisible</h2> -->
                {{--
                <select name="list_barang" id="list_barang" style="width: 10vw; background-color: grey; color: white; padding: 1vh; height: 5vh">
                    <option value="barang">List Merek</option>
                    <option value="jenis">List Barang</option>
                    <option value="merek">List Jenis</option>
                </select>
                --}}
                <h2 class="text-xl text-primary font-bold mr-5" style="margin-left: 35vw">List Merek Barang</h2>
                <a href="{{route('addMerek')}}" class="btn btn-primary bg-blue-950 text-white">Tambah</a>
            </div>

            <table  class="table table-auto w-full mt-3 mx-3">
                <thead>
                  <tr class="text-xl text-black">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th class="w-[15%]">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($merek as $mrk)
                    <tr>
                        <td class="text-left font-bold text-lg">{{$mrk->id_merek}}</td>
                        <td class="text-left font-bold text-lg">{{$mrk->nama_merek}}</td>
                        <td class="text-left font-bold text-lg">{{substr( $mrk->deskripsi_merek,0,75)}}</td>
                        <td class="text-center font-bold text-lg">{{$mrk->status_merek == 1 ? "Aktif" : "NonAktif"}}</td>
                        <td class="flex">
                            <a href="{!! url('owner/editMerek/'.$mrk->id_merek); !!}"  class="btn btn-success bg-white text-primary text-xs hover:text-white mr-3">Edit</a>
                            @if($mrk->status_merek == 1)
                            <a href="{!! url('merek/nonaktifkan/'.$mrk->id_merek); !!}" class="btn btn-error bg-white text-red-400 hover:text-white">Nonaktif</a>
                             @else
                            <a href="{!! url('merek/aktifkan/'.$mrk->id_merek); !!}" class="btn btn-error bg-white text-red-400 hover:text-white">Aktif</a>
                             @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
