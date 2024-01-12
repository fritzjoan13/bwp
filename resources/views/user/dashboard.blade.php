@extends('layout.app')

@section('content')
    @include('layout.navbar')
    <img src="{{ asset('img/welcome.png') }}" alt="Welcome Gambar" style="height: 75vh; margin: auto; margin-top: 5vh; width: 75vw">
    <div class="flex flex-wrap ml-12 mt-5">
        @foreach($brg as $row)
            <a href="{!! url('detail/'.$row->id_barang); !!}" class="card rounded-none w-80 bg-base-100 shadow-xl mx-5 my-5">
                <figure><img src="{{asset('produk/'.$row->foto_barang)}}" alt="" /></figure>
                <div class="card-body p-4">
                    <div class="flex flex-col items-center">
                        <h2 class="card-title font-bold">{{ $row->nama_barang }}</h2>
                        <h3 class="text-lg text-primary font-bold">Rp {{ number_format($row->harga_jual) }}</h3>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
