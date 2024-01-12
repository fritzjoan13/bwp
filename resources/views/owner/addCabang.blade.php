@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-full">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Add Cabang</h2>
                <button class="btn btn-primary text-primary bg-white mx-3 w-32">
                    Logout
                </button>
            </div>
            <form method="post"action="{!! url('addCabang'); !!}">
                @csrf
            <div class="container">
                <div class="box" style="height: 85vh; width: 51vw; margin-left: 15vw; margin-top: 3vh; background-color: lightgrey; border: 1px solid">
                    <div style="margin-top: 5vh; margin-left: 5vw">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No. Telp</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary text-white ">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
