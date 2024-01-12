@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-5/6">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Request Stock</h2>
                <input type="text" placeholder="Search" style="height: 5vh; padding: 1vw; border-radius: 5px">
                <a href="{{route('login')}}"><button
                    class="btn btn-primary text-primary bg-white mx-3 w-32">Logout</button></a>
            </div>
            <div class="flex justify-between my-5 mx-3">
                <!-- <h2 class="invisible">invisible</h2> -->
                <h2 class="text-xl text-primary font-bold" style="margin-left: 35vw;">List Request Stock</h2>
            </div>

            <table  class="table table-auto w-full mt-3 mx-3">
                <thead>
                  <tr class="text-xl text-black">
                    <th>ID</th>
                    <th>Nama Cabang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th class="w-[20%]">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($reqstok as $rs)
                    <tr>
                        <td class="text-left font-bold text-lg">{{$rs->id_request}}</td>
                        <td class="text-left font-bold text-lg">{{$rs->nama_cabang}}</td>
                        <td class="text-left font-bold text-lg">{{$rs->nama_barang}}</td>
                        <td class="text-left font-bold text-lg">{{$rs->jumlah_ditambahkan}}</td>
                        @if($rs->status_request == 1)
                        <td><h2 class="text-left font-bold text-lg">Request Masuk</h2></td>
                        @elseif($rs->status_request == 2)
                        <td><h2 class="text-left font-bold text-lg">Request Ditolak</h2></td>
                        @elseif($rs->status_request == 3)
                        <td><h2 class="text-left font-bold text-lg">Request Diterima</h2></td>
                        @endif
                        <td class="flex">
                            <a href="{!! url('requestStok/accept/'.$rs->id_request); !!}" class="btn btn-success bg-white text-primary text-xs hover:text-white mr-3">Accept</a>
                            <a href="{!! url('requestStok/reject/'.$rs->id_request); !!}" class="btn btn-error bg-white text-error hover:text-white">Reject</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
