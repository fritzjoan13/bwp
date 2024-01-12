@extends('layout.app')

@section('content')
    <div class="flex">
        <div class="w-full">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Welcome, {{ session()->get("userlogin")->nama_users }}</h2>
                <div class="flex">
                    <a href="{{route('penjualan')}}" class="btn btn-primary bg-white mx-3 text-black hover:text-white">Penjualan</a>
                    <a href="{{route('requestStokAdmin')}}" class="btn btn-primary bg-white text-black hover:text-white">Request Stock</a>
                    <a href="{{route('stokOpname')}}" class="btn btn-primary bg-white mx-3 text-black hover:text-white">Stock Opname</a>
                </div>
                <a href="{{route('login')}}"><button class="btn btn-primary text-primary bg-white mx-3 w-32">Logout</button></a>
            </div>

            <div class="flex justify-center my-5 mx-3">
                <h2 class="text-xl text-primary font-bold ml-5">List Penjualan</h2>
            </div>

            <table class="table table-auto w-full mt-3 mx-3">
                <thead>
                    <tr class="text-xl text-black">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th class="w-[10%]">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dhtrans as $ht)
                        <tr>
                            <td class="text-right font-bold text-lg">{{$ht->id_transaksi}}</td>
                            <td class="text-right font-bold text-lg">{{$ht->nama_users}}</td>
                            <td class="text-right font-bold text-lg">{{$ht->tanggal_transaksi}}</td>
                            <td class="text-right font-bold text-lg"> Rp. {{number_format($ht->total_transaksi) }}</td>
                            <td class="text-left font-bold text-lg">
                                @if($ht->status_transaksi == 0)Belum Terkonfirmasi
                                @elseif($ht->status_transaksi == 1)Sedang Diproses
                                @elseif($ht->status_transaksi == 2)Sedang Dikirim
                                @elseif($ht->status_transaksi == 3)Transaksi Selesai
                                @endif
                             </td>
                            <td class="flex">
                                <a href="{!! url('admin/detail/'.$ht->id_transaksi); !!}" class="btn btn-success bg-white text-primary text-xs hover:text-white mr-3">Detail</a>
                            </td>

                        </tr>
                    @endforeach
                    {{-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><h2 class="text-xl text-red-400">Belum Terkonfirmasi</h2></td>
                        <td class="flex">
                            <a href="{{route('detailPenjualan')}}" class="btn btn-primary bg-white text-primary hover:text-white">Detail</a>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
