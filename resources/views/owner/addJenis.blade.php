@extends('layout.app')

@section('content')
    <div class="flex">
        @include('layout.sidebar')
        <div class="w-full">
            <div class="w-full bg-blue-950 h-16 flex justify-between items-center">
                <h2 class="text-xl text-white font-bold ml-5">Add Jenis</h2>
                <a href="{{route('login')}}"><button class="btn btn-primary text-primary bg-white mx-3 w-32">
                    Logout
                </button></a>
            </div>
            <form method="post"action="{!! url('addJenis'); !!}">
                @csrf
            <div class="container">
                <div class="box" style="height: 85vh; width: 51vw; margin-left: 15vw; margin-top: 3vh; background-color: lightgrey; border: 1px solid">
                    <div style="margin-top: 5vh; margin-left: 5vw">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" style="width: 40vw; height: 4vh; border: 1px solid">
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
