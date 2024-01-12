@extends('layout.app')

@section('content')
    @include('layout.navbar')
    <div class="text-xl font-bold text-white text-center mt-5 bg-primary h-10 p-1">Transaksi</div>

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
    <table  class="table table-auto w-full mt-5 mx-3">
                <thead>
                  <tr class="text-xl text-black">
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                    <th class="w-[15%]">Action</th>
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
                        <td class="flex">
                            <a href="" class="btn btn-success bg-white text-success hover:text-white mr-3">Download Nota</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              <div class="flex justify-left my-5 mx-3">
                <h2 class="text-xl text-primary font-bold ml-5">Total Transaksi : Rp. {{number_format($datahtrans[0]['total_transaksi'])}}</h2>
            </div>
@endsection
