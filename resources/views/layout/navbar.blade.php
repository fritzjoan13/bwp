<div class="navbar bg-blue-950">
    <div class="flex-1 navbar-start">
        <a href="{{route('dashboard')}}" class="btn btn-ghost normal-case text-xl text-white">Toko Jaya Makmur</a>
    </div>
    <div class="navbar-center">
        <div class="form-control w-72  mr-3">
            <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
        </div>
        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M3 4.6C3 4.03995 3 3.75992 3.10899 3.54601C3.20487 3.35785 3.35785 3.20487 3.54601 3.10899C3.75992 3 4.03995 3 4.6 3H19.4C19.9601 3 20.2401 3 20.454 3.10899C20.6422 3.20487 20.7951 3.35785 20.891 3.54601C21 3.75992 21 4.03995 21 4.6V6.33726C21 6.58185 21 6.70414 20.9724 6.81923C20.9479 6.92127 20.9075 7.01881 20.8526 7.10828C20.7908 7.2092 20.7043 7.29568 20.5314 7.46863L14.4686 13.5314C14.2957 13.7043 14.2092 13.7908 14.1474 13.8917C14.0925 13.9812 14.0521 14.0787 14.0276 14.1808C14 14.2959 14 14.4182 14 14.6627V17L10 21V14.6627C10 14.4182 10 14.2959 9.97237 14.1808C9.94787 14.0787 9.90747 13.9812 9.85264 13.8917C9.7908 13.7908 9.70432 13.7043 9.53137 13.5314L3.46863 7.46863C3.29568 7.29568 3.2092 7.2092 3.14736 7.10828C3.09253 7.01881 3.05213 6.92127 3.02763 6.81923C3 6.70414 3 6.58185 3 6.33726V4.6Z"
                stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <div class="flex-none gap-2 navbar-end">

        <a href="{{route('history')}}">
            <h5 class="text-white font-bold">Transaksi</h5>
        </a>
        <a href="{{route('cart')}}">
            <svg class="w-8 h-8  mx-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                    stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
        <a href="#"><button class="btn w-60">Welcome, {{ session()->get("userlogin")->nama_users }}</button></a>
        <a href="{{route('login')}}"><button class="btn w-24">Logout</button></a>
    </div>
</div>
