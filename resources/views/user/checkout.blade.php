@extends('layout.app')

@section('style')
    <style>
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-number-input input:focus {
            outline: none !important;
        }

        .custom-number-input button:focus {
            outline: none !important;
        }
    </style>
@endsection

@section('content')
    @include('layout.navbar')
    <div class="flex">
        <div class="w-[65%] flex flex-col items-center">
            <div class=" w-[95%] rounded-none w-80 bg-base-100 shadow-xl mt-10">
                <h2 class="text-3xl font-bold ml-5 mt-5">Keranjang</h2>
                <div class="ml-5 mt-5 flex">
                    <input id="checkall" type="checkbox" class="checkbox mt-2" />
                    <h2 class="text-xl w-32 ml-2 mt-2">Pilih Semua</h2>
                    <div class="w-full flex justify-end mb-5">
                        <button class="btn text-xl text-primary btn-ghost">Hapus</button>
                    </div>
                </div>
            </div>

            @php $i = 0;
                $sum = 0;
                $count = 0;
            @endphp
            @foreach(session()->get('cart', []) as $row)
                @php $count+=($row->qty) @endphp
                @php $sum+=($row->qty * $row->harga_jual) @endphp
                <div class="w-[95%] rounded-none shadow-xl mt-2">
                    <div class="ml-5 mt-5 flex">
                        <input id="check2" type="checkbox" class="checkbox mt-5" />
                        <img src= '{{ url('produk/'.$row->foto_barang) }}' class="w-20 ml-3 my-5" alt="">
                        <div class="w-[100%] my-5 ml-3">
                            <h2 class="card-title font-bold">{{ $row->nama_barang }}</h2>
                            <h3 class="font-bold text-lg text-primary">Rp {{ number_format($row->harga_jual) }}</h3>
                        </div>
                        <div class="flex justify-end items-end mb-5 mr-5">
                            <a href="{!! url('hapuscart/'.$i); !!}">
                                <svg class="w-8 h-8 cursor-pointer" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17"
                                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <div class="custom-number-input h-10 w-32 ml-5">
                                <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                    <button data-action="decrement"
                                        class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                        <span class="m-auto text-2xl font-thin">−</span>
                                    </button>
                                    <input type="number" id="val2"
                                        class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                        name="custom-input-number" max="49" value="{{ $row->qty }}">
                                    <button data-action="increment"
                                        class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                        <span class="m-auto text-2xl font-thin">+</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php $i++; @endphp
            @endforeach
        </div>

        <div class="w-[35%] flex flex-col items-center">
            <div class=" w-[95%] rounded-none w-80 bg-base-100 shadow-xl mt-10">
                <form method="post" action="{{ Route('postcheckout') }}">
                @csrf
                <input type="hidden" name="sum" value={{ $sum }} />
                    <h2 class="text-xl font-bold ml-5 mt-5">Ringkasan Belanja</h2>
                    <div class="mx-5 mt-5 flex justify-between">
                        <h2 class="text-xl text-gray-500" id="barang">Total Harga ({{ $count }} barang)</h2>
                        <h2 class="text-xl font-bold text-primary" id="total1">Rp. {{ number_format($sum) }}</h2>
                    </div>
                    <div class="divider mx-3"></div>
                    <h2 class="text-xl font-bold text-gray-500 ml-5 mt-3">Total Harga</h2>
                    <h2 class="text-xl font-bold text-primary ml-5 mt-1" id="total2">Rp. {{ number_format($sum) }}</h2>
                    <div class="divider mx-3"></div>
                    <div>
                        <h2 class="text-xl font-bold ml-3">Informasi Pengiriman</h2><br />
                        <label class="ml-5 mb-5 font-bold text-xs">Nama Penerima : </label><br />
                        <input type="text" placeholder="Nama Penerima" class="input input-bordered md:w-[90%] mx-5 mt-2" value="{{ session()->get("userlogin")->nama_users }}" name="namapenerima" /><br /><br />
                        <label class="ml-5 mb-5 font-bold text-xs">Alamat Penerima : </label><br />
                        <input type="text" placeholder="Alamat Penerima" class="input input-bordered md:w-[90%] mx-5 mt-2" value="{{ session()->get("userlogin")->alamat_users }}" name="alamatpenerima" /><br /><br />
                        <label class="ml-5 mb-5 font-bold text-xs">Nomer Penerima : </label><br />
                        <input type="text" placeholder="Contact Penerima" class="input input-bordered md:w-[90%] mx-5 mt-2" value="{{ session()->get("userlogin")->nomer_users }}" name="telppenerima" /><br /><br />
                    </div>
                    <div class="divider mx-3"></div>
                    <div>
                        <h2 class="text-xl font-bold ml-3">Opsi Pengiriman</h2>
                        <div class="flex">
                            <input type="radio" value="Reguler" name="pengiriman" checked="checked" class="radio mt-5 ml-3" />
                            <h2 class="text-xl ml-3 mt-4">Reguler</h2>
                        </div>
                        <div class="flex">
                            <input type="radio" value="Ambil Di Toko" name="pengiriman" class="radio mt-5 ml-3" />
                            <h2 class="text-xl ml-3 mt-4">Ambil Di Toko</h2>
                        </div>
                    </div>
                    <div class="divider mx-3"></div>
                    <div>
                        <h2 class="text-xl font-bold ml-3">Metode Pembayaran</h2>
                        <div class="flex">
                            <input type="radio" value="Transfer Bank" name="metodepembayaran" checked="checked" class="radio mt-5 ml-3" />
                            <h2 class="text-xl ml-3 mt-4">Transfer Bank</h2>
                        </div>
                        <div class="flex">
                            <input type="radio" value="Bayar Di Toko" name="metodepembayaran" class="radio mt-5 ml-3" />
                            <h2 class="text-xl ml-3 mt-4">Bayar Di Toko</h2>
                        </div>
                    </div>
                    <br />
                    @if ($count > 0)
                        <button type="submit" class="btn bg-blue-950 btn-primary text-white w-full mx-3 my-3" id="but">Check Out</button>
                    @else
                        <button disabled type="submit" class="btn bg-blue-950 btn-primary text-white w-full mx-3 my-3" id="but">Check Out</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        //check all
        const checkall = document.getElementById('checkall');
        const check1 = document.getElementById('check1');
        const check2 = document.getElementById('check2');

        checkall.addEventListener('click', function() {
            if (checkall.checked == true) {
                check1.checked = true;
                check2.checked = true;
            } else {
                check1.checked = false;
                check2.checked = false;
            }
            updateSubtotal();
        })

        //check1 onchane
        check1.addEventListener('change', function() {
            updateSubtotal();
        })

        //check2 onchane
        check2.addEventListener('change', function() {
            updateSubtotal();
        })

        function updateSubtotal() {
            const price1 = 200000;
            const price2 = 200000;

            const val1 = document.getElementById('val1').value;
            const val2 = document.getElementById('val2').value;

            const total1 = document.getElementById('total1');
            const total2 = document.getElementById('total2');
            const barang = document.getElementById('barang');
            const but = document.getElementById('but');

            let count = 0;
            let total = 0;
            if (check1.checked) {
                count += 1;
                total += Number(val1) * price1;
            }
            if (check2.checked) {
                count += 1;
                total += Number(val2) * price2;
            }

            total1.innerHTML = "Rp " + total.toLocaleString('id-ID');
            total2.innerHTML = "Rp " + total.toLocaleString('id-ID');
            barang.innerHTML = "Total Harga (" + count + " barang)";
            but.innerHTML = "Beli (" + count + ")";

        }

        function decrement(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value--;
            target.value = value;
            updateSubtotal();
        }

        function increment(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value++;
            target.value = value;
            updateSubtotal();
        }

        const decrementButtons = document.querySelectorAll(
            `button[data-action="decrement"]`
        );

        const incrementButtons = document.querySelectorAll(
            `button[data-action="increment"]`
        );

        decrementButtons.forEach(btn => {
            btn.addEventListener("click", decrement);
        });

        incrementButtons.forEach(btn => {
            btn.addEventListener("click", increment);
        });
    </script>
@endsection
