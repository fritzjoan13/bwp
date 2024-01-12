@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-5/6">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Laporan</h2>
                <input type="text" placeholder="Search" style="height: 5vh; padding: 1vw; border-radius: 5px">
                <a href="{{route('login')}}"><button
                    class="btn btn-primary text-primary bg-white mx-3 w-32">Logout</button></a>
            </div>
            <div class="flex">
                <form method="POST" action="">
                    <input type="date" name="tanggalawal" style="margin: 2vh; background-color: white; color: black; padding: 1vh; border-radius: 5px; border: 1px solid">
                    <input type="date" name="tanggalakhir" style="margin: 2vh; background-color: white; color: color; padding: 1vh; border-radius: 5px; border: 1px solid">
                    <input type="submit" class="btn btn-primary bg-white text-primary hover:text-white mr-3" style="border-radius: 5px; height: 5vh" value='Show Laporan'>
                </form>
            </div>
            <div class="flex justify-between my-5 mx-3">
                <!-- <h2 class="invisible">invisible</h2> -->
                <h2 class="text-xl text-primary font-bold" style="margin-left: 35vw;">List Laporan</h2>
            </div>

            <table  class="table table-auto w-full mt-3 mx-3">
                <thead>
                  <tr class="text-xl text-black">
                    <th>ID Transaksi</th>
                    <th>Nama Customer</th>
                    <th>Total</th>
                    <th class="w-[25%]">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($laporan as $l)
                    <tr>
                        <td class="text-left font-bold text-lg">{{$l->id_transaksi}}</td>
                        <td class="text-left font-bold text-lg">{{$l->nama_users}}</td>
                        <td class="text-left font-bold text-lg">Rp. {{ number_format($l->total_transaksi) }}</td>
                        <td class="flex">
                            <a href="{!! url('laporan/'.$l->id_transaksi); !!}" class="btn btn-primary bg-white text-primary hover:text-white mr-3">Detail</a>
                            <a href="" class="btn btn-success bg-white text-success hover:text-white">Download Excel</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>

    </div>
@endsection
