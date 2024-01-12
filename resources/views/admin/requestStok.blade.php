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

            <div class="flex justify-center my-5 mx-3">
            <!-- <h2 class="invisible">invisible</h2> -->
                <h2 class="text-xl text-primary font-bold" style="margin-left: 40vw">Request Stock</h2>
                <a href="{{route('form')}}" class="btn btn-primary bg-blue-950 text-white" style="margin-left: 30vw;">Form Request Stock</a>
            </div>

            <table class="table table-auto w-full mt-3 mx-3">
                <thead>
                    <tr class="text-xl text-black">
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        {{--<th class="w-[12%]">Action</th>--}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reqstok as $rs)
                    <tr>
                        <td class="text-left font-bold text-lg"> {{$rs->id_request}}</td>
                        <td class="text-left font-bold text-lg"> {{$rs->nama_barang}}</td>
                        <td class="text-left font-bold text-lg">{{ number_format($rs->jumlah_ditambahkan) }}</td>
                        @if($rs->status_request == 1)
                            <td><h2 class="text-left font-bold text-lg">Request Masuk</h2></td>
                        @elseif($rs->status_request == 2)
                            <td><h2 class="text-left font-bold text-lg">Request Ditolak</h2></td>
                        @elseif($rs->status_request == 3)
                            <td><h2 class="text-left font-bold text-lg">Request Diterima</h2></td>
                        @endif

                        {{-- <td class="flex">
                            <a href="" class="btn btn-primary bg-white text-primary hover:text-white">Request Ulang</a>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
