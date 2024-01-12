@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-full">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Edit Merek</h2>
                <a href="{{route('login')}}"><button class="btn btn-primary text-primary bg-white mx-3 w-32">
                    Logout
                </button></a>
            </div>
            <form method="POST"action="{{ Route('postUpdateMerekBarang') }}">
                @csrf
                <input type="hidden" name="id" value="{{$datamerek['id_merek']}}">
            <div class="container">
                <div class="box" style="height: 85vh; width: 51vw; margin-left: 15vw; margin-top: 3vh; background-color: lightgrey; border: 1px solid">
                    <div style="margin-top: 5vh; margin-left: 5vw">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" style="width: 40vw; height: 4vh; border: 1px solid">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" style="width: 40vw; height: 10vh; border: 1px solid">
                        </div>
                        <div class="flex">
                            <button class="btn btn-primary text-white mt-4 mr-3">Edit</button>
                            <button class="btn btn-success text-white mt-4 mr-3">Aktifkan</button>
                            <button class="btn btn-error text-white mt-4">Nonaktikan</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
