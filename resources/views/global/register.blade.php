<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post"action='{{ Route('postregister') }}'>
            @csrf
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4 mt-5 text-primary">Register</h2>
                <div class="bg-primary" style="margin: auto; height: 75vh; padding: 10vh; border-radius: 10px">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="d-grid gap-1" style="width: 20vw; margin: auto; margin-top: 5vh">
                            <input type="submit" class="d-grid" style="height: 5vh; border-radius: 5px" value='Register'>
                        </div>
                        <p class="text-center mt-4 text-white">Already have an account? <a href="{{route('login')}}" class="text-white">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </form>
    </div>
</body>
</html>
