<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

    <!-- login -->
    <div class="container">
        <div class="row justify-content-center mt-4 " >
            <div class="col-md-5 bg-light shadow p-3">
                <!-- logo -->
                <h1 class="logo mt-5" >🍀</h1>
                <!-- judul -->
                <div class="login mt-5 mb-4">
                    <div><div class="garis"></div></div>
                    <h6>Login</h6>
                    <div><div class="garis"></div></div>
                </div>

                <!-- form -->
                <form class="mb-3" action="/login" method="post"  >
                    @csrf

                    <div class="kelompokInput">
                        <div class="tanda"> <i class="bi bi-person"></i></div>
                        <input type="text" name="name" id="name" placeholder="name" autocomplete="off" >
                    </div>
                    <div class="kelompokInput2">
                        <div class="tanda"> <i class="bi bi-key"></i></div>
                        <input type="password" name="password" id="password" placeholder="password" autocomplete="off">
                    </div>
                    <div class="kelompokInput3">
                        <div><input type="checkbox" name="" id=""> Remember Me</div>
                        <div><a class="lupaPassword" >Forgot You Password?</a></div>
                    </div>
                    <button type="submit" class="submit mt-3 " > <i class="bi bi-unlock"></i> Login</button>
                    <p style="font-size:12px" class="text-center mt-2" >Belum Punya Akun bisa <a href="/registrasi" class="fw-bold text-decoration-none" >registrasi</a> dulu</p>
                </form>

                <div class="garis mb-5"></div>

            </div>
        </div>
    </div>

    <!-- js bosstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>