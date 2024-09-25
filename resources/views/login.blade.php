<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body style="background-image:url('assets/img/login/riska2.jpg');">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card w-75 p-5 border-0 shadow rounded-4">
            <div class="row">
                <div class="col-6">
                    <h2 class="text-center fw-bold">Login</h2>
                    <div class="mt-3" style="height: 3px; background-color: #FFB1B1"></div>
                    <p class="text-center mt-3 fw-bold">Glide Cakes</p>
                    
                    <form action="{{ route('action-login') }}" enctype="multipart/form-data" method="POST" class=" form-group">
                        @csrf <!-- Token CSRF untuk keamanan -->
                        
                        <div>
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input class="form-control" name="email" placeholder="Masukan email" type="text">
                        </div>
                        
                        <div class="mt-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input class="form-control" name="password" placeholder="Masukan password" type="password">
                        </div>
                        
                        <div class="mt-4">
                            <button class="btn btn-primary w-100 border-0" style="background-color: #FFB1B1">Login</button>
                        </div>
                        
                        <div class="mt-4">
                            <a class="btn btn-primary w-100 border-0" href="/index" style="background-color: #FFB1B1">Kembali</a>
                        </div>
                        
                        <div class="mt-3 d-flex justify-content-center">
                            <a href="#" class="text-black text-decoration-none text-center">Lupa Password?</a>
                        </div>
                    </form>
                </div>
                
                <div class="col-6 a"></div>
            </div>
        </div>
    </div>

    <style>
        .a {
            background-image: url('assets/img/login/riska8.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
