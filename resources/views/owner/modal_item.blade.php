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
                <input type="date" name="date" style="margin: 2vh; background-color: white; color: black; padding: 1vh; border-radius: 5px; border: 1px solid">
                <b><h1 style="margin-top: 3vh;">></h1></b>
                <input type="date" name="date" style="margin: 2vh; background-color: white; color: color; padding: 1vh; border-radius: 5px; border: 1px solid">
            </div>
            <div class="flex justify-between my-5 mx-3">
                <!-- <h2 class="invisible">invisible</h2> -->
                <h2 class="text-xl text-primary font-bold" style="margin-left: 35vw;">Detail Laporan</h2>
            </div>


            <div class="flex justify-left my-5 mx-3">
                <h2 class="text-l text-primary font-bold ml-5">ID : {{$datahtrans[0]['id_transaksi']}}</h2>
            </div>
            <div class="flex justify-left my-5 mx-3">
                <h2 class="text-l text-primary font-bold ml-5">{{$datahtrans[0]['nama_users']}}</h2>
            </div>
            <div class="flex justify-left my-5 mx-3">
                <h2 class="text-l text-primary font-bold ml-5">Status :
                @if($datahtrans[0]['status_transaksi'] == 0)Belum Terkonfirmasi
                @elseif($datahtrans[0]['status_transaksi'] == 1)Sedang Diproses
                @elseif($datahtrans[0]['status_transaksi'] == 2)Sedang Dikirim
                @elseif($datahtrans[0]['status_transaksi'] == 3)Transaksi Selesai
                @endif
                </h2>
            </div>

            <table class="table table-auto w-full mt-3 mx-3">
                <thead>
                    <tr class="text-xl text-black">
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datadtrans as $dt)
                    <tr>
                        <td class="text-left font-bold text-lg">{{$dt->id_detail}}</td>
                        <td class="text-left font-bold text-lg">{{$dt->nama_barang}}</td>
                        <td class="text-left font-bold text-lg">{{$dt->qty_barang}}</td>
                        <td class="text-left font-bold text-lg">Rp. {{ number_format($dt->harga_barang) }}</td>
                        <td class="text-left font-bold text-lg">Rp. {{ number_format($dt->subtotal) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex justify-left my-5 mx-3">
                <h2 class="text-xl text-primary font-bold ml-5">Total Transaksi : Rp. {{number_format($datahtrans[0]['total_transaksi'])}}</h2>
            </div>
            <div class="flex justify-center my-5 mx-3">
                @if($datahtrans[0]['status_transaksi'] == 0)
                <a href="{!! url('detail/update/'.$datahtrans[0]['id_transaksi']); !!}" class="btn btn-success bg-white text-primary hover:text-white">Lanjut ke Sedang Diproses</a>
                @elseif($datahtrans[0]['status_transaksi'] == 1)
                <a href="{!! url('detail/update/'.$datahtrans[0]['id_transaksi']); !!}" class="btn btn-success bg-white text-primary hover:text-white">Lanjut ke Sedang Dikirim</a>
                @elseif($datahtrans[0]['status_transaksi'] == 2)
                <a href="{!! url('detail/update/'.$datahtrans[0]['id_transaksi']); !!}" class="btn btn-success bg-white text-primary hover:text-white">Lanjut Transaksi Selesai</a>
                @endif
            </div>
        </div>
    </div>
@endsection
