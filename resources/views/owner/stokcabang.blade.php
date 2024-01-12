@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-5/6">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Stok Cabang</h2>
                <input type="text" placeholder="Search" style="height: 5vh; padding: 1vw; border-radius: 5px">
                <a href="{{route('login')}}"><button
                    class="btn btn-primary text-primary bg-white mx-3 w-32">Logout</button></a>
            </div>
            <div class="flex justify-between my-5 mx-3">
                <h2 class="text-xl text-primary font-bold" style="margin-left: 35vw;">List Stok Cabang</h2>
            </div>

            <div class="flex justify-between my-5 w-full">
                <table class="table table-auto w-full">
                    <thead>
                    <tr class="text-xl text-black">

                        <th>Nama Barang</th>
                        <th>Nama Cabang</th>
                        <th>Stok Barang</th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($stokcabang as $sc)
                        <tr>
                            <td class="text-left font-bold text-lg">{{$sc->nama_barang}}</td>
                            <td class="text-left font-bold text-lg">{{$sc->nama_cabang}}</td>
                            <td class="text-left font-bold text-lg">{{$sc->qty_stok}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
