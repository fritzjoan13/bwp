@extends('layout.app')

@section('content')
    @include('layout.navbar')
    <div class="mx-10">
      <div class="text-xl font-bold text-white text-center mt-5 bg-primary h-10 p-1">History Transaksi</div>
      <table  class="table table-auto w-full mt-5 mx-3">
        <thead>
          <tr class="text-xl text-black">
            <th class="text-center">ID</th>
            <th class="text-center">Total</th>
            <th class="text-center">Status</th>
            <th class="w-[10%] text-center">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($datatrans as $row)
              @php $totalitem = 0; @endphp
              @foreach($detailtrans as $rowdet)
                @if($rowdet->id_transaksi == $row->id_transaksi)
                  @php $totalitem = $totalitem + $rowdet->qty_barang; @endphp
                @endif
              @endforeach
            <tr>
                <td><label class="font-bold text-lg">Nomer Nota : {{ $row->id_transaksi }}</label><br />
                  <label class="font-bold text-red-800 text-xs">{{ date("d M Y", strtotime($row->tanggal_transaksi)) }}</label>
                </td>
                <td class="font-bold text-lg text-right">
                  <label class="text-xs">Total Item : {{ $totalitem }}</label><br />
                  <label>Rp. {{ number_format($row->total_transaksi) }},-</label>
                </td>
                @if($row->status_transaksi == 0)
                  <td class="font-bold text-lg text-center">Menunggu Konfirmasi</td>
                @elseif ($row->status_transaksi == 1)
                  <td class="font-bold text-lg text-center">Diproses</td>
                @elseif ($row->status_transaksi == 2)
                  <td class="font-bold text-lg text-center">Dikirim</td>
                @elseif ($row->status_transaksi == 3)
                  <td class="font-bold text-lg text-center">Diterima</td>
                @endif
                <td class="flex">
                    <a href="{!! url('detailTransaksi/'.$row->id_transaksi); !!}" class="btn btn-error bg-white text-red-400 hover:text-white">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
@endsection
