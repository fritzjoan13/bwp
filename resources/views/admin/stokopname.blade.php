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

            <div class="flex justify-left my-5 mx-3">
                <h2 class="text-xl text-primary font-bold" style="margin-left: 40vw">Stock Opname <br>Cabang {{$stokopname[0]->nama_cabang}}</h2>
            </div>

            <table class="table table-auto w-full mt-3 mx-3">
                <thead>
                    <tr class="text-xl text-black">
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Qty Tambahan</th>
                        <th>Action</th>
                        {{--<th class="w-[12%]">Action</th>--}}
                    </tr>
                </thead>
                <tbody>


                    @foreach ($stokopname as $so)
                    <form method="POST" action="{{ Route('postStokOpname') }}">
                        @csrf
                    <tr>
                        <input type="hidden"name="id_barang"value="{{$so->id_barang}}">
                        <input type="hidden"name="id_cabang"value="{{$so->id_cabang}}">
                        <td class="text-left font-bold text-lg"> {{$so->nama_barang}}</td>
                        <td class="text-left font-bold text-lg">{{ number_format($so->qty_stok) }}</td>
                        <td class="text-left font-bold text-lg">
                            <input type="number" value=0 class="form-control" id="jumlah" name="jumlah" style="width: 10vw; height: 4vh; border: 1px solid;">
                        </td>

                        <td class="flex">
                            <input type="submit" class="btn btn-primary text-black" style="border-radius: 5px; height: 5vh" value='Tambahkan Stok'>
                        </td>

                    </tr>
                </form>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
