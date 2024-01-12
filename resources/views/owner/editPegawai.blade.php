@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-full">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Edit Pegawai</h2>
                <a href="{{route('login')}}"><button class="btn btn-primary text-primary bg-white mx-3 w-32">
                    Logout
                </button></a>
            </div>
            <div class="container">
                <form method="POST"action="{{ Route('postUpdatePegawai') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$datapegawai['id_users']}}">
                <div class="box" style="height: 85vh; width: 51vw; margin-left: 15vw; margin-top: 3vh; background-color: lightgrey; border: 1px solid">
                    <div style="margin-top: 5vh; margin-left: 5vw">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="cpass" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="cpass" name="cpass" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="no_telp" class="form-label">No. Telp</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="id_cabang" class="form-label">ID Cabang</label>
                            <input type="text" class="form-control" id="id_cabang" name="id_cabang" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="flex">
                            <button class="btn btn-primary text-white mt-4 mr-3">Edit</button>
                            <button class="btn btn-success text-white mt-4 mr-3">Aktifkan</button>
                            <button class="btn btn-error text-white mt-4">Nonaktikan</button>
                        </div>
                    </div>
                </div>  </form>
            </div>
        </div>
    </div>
@endsection
