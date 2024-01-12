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
        <div class="w-[40%] flex flex-col items-center">
            <div class=" w-[75%] rounded-none w-80 bg-base-100 shadow-xl mt-10">
                <img class="w-full" src={{ url('produk/'.$brg->foto_barang) }} alt="" />
            </div>
            <div class="w-[75%] flex justify-center">
                <div class="w-[30%] border h-32 rounded-none w-80 bg-base-100 shadow-xl mr-5 mt-5">
                    <img class="w-full" alt="" />
                </div>

                <div class="w-[30%] border h-32 rounded-none w-80 bg-base-100 shadow-xl mr-5 mt-5">
                    <img class="w-full" alt="" />
                </div>

                <div class="w-[30%] border h-32 rounded-none w-80 bg-base-100 shadow-xl mr-5 mt-5">
                    <img class="w-full" alt="" />
                </div>
            </div>
        </div>

        <div class="w-[60%] flex flex-col mt-10 mr-24 bg-slate-200 border shadow-xl">
            <h2 class="text-3xl font-bold ml-5 mt-5">{{ $brg->nama_barang }}</h2>
            <h2 class="text-3xl font-bold ml-5 mt-3 text-primary">Rp. {{ number_format($brg->harga_jual) }}</h2>
            <h4 class="whitespace-pre-line text-xl ml-5 mt-3">{{ $brg->deskripsi_barang }}</h4>
                    <input type='hidden' id='id_barang' value='{{ $id }}'>
                    <input type='hidden' id='harga_jual' value='{{ $brg->harga_jual }}'>
                    <h2 class="text-2xl font-bold ml-5 mt-3">Atur Jumlah</h2>

                    <div class="custom-number-input h-10 w-64 ml-5">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                            <button data-action="decrement"
                                class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                            <input type="number" id="qty"
                                class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                name="custom-input-number" max="49" value="0">
                            <button data-action="increment"
                                class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                <span class="m-auto text-2xl font-thin">+</span>
                            </button>

                            <p class="text-lg font-bold ml-5">Stok</p>
                            <p class="text-lg font-bold ml-1">{{ $brg->stok_barang }}</p>
                        </div>
                    </div>

                    <h2 class="text-xl font-bold ml-5 mt-5">Subtotal</h2>
                    <h2 class="text-xl font-bold ml-5 mt-3 text-primary" id="subtotal">Rp 200.000</h2>

                    <div class="flex">
                        <button onclick="addtocart()" type="button" class="btn btn-primary bg-blue-950 font-bold text-white ml-5 mt-5">
                            +Keranjang
                        </button>
                    </div>
        </div>
    @endsection

    @section('script')
        <script>
            var myurl = "<?php echo URL::to('/'); ?>";
            function addtocart() {
                let id = $("#id_barang").val();
                let value = $("#qty").val();
                if(value > 0) {
                    window.location = myurl + "/addtocart/" + id + "/" + value;
                }
                else { alert('Qty tidak boleh kosong'); }
            }
            function updateSubtotal() {
                const input = document.querySelector('input[name="custom-input-number"]');
                const subtotal = document.querySelector('#subtotal');
                const price = $("#harga_jual").val();
                //format rupiah
                const formatter = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0
                })
                subtotal.innerHTML = formatter.format(price * input.value);
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

            updateSubtotal();
        </script>
    @endsection
