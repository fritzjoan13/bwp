<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action='{{ Route('postlogin') }}'>
            @csrf
            <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4 mt-5 text-primary">Toko Jaya Makmur</h2>
                <h6 class="text-center mb-4 mt-5 text-danger">{{ session()->get('errormsg') }}</h6>
                <div class="bg-primary" style="margin: auto; height: 55vh; padding: 10vh; border-radius: 10px">
                    <div class="mb-3">
                        <label for="username" class="form-label text-white">Username</label>
                        <input type="text" class="form-control" id="username_user" name="username_user">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Password</label>
                        <input type="password" class="form-control" id="password_user" name="password_user">
                    </div>
                    <center><input type="submit" class="d-grid w-50 btn-light" style="border-radius: 5px; height: 5vh" value='Login'></center>
                    <p class="text-center mt-4 text-white">Don't have an account? <a href="{{route('register')}}" class="text-white">Register</a></p>
                </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
