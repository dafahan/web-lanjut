<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Daftar</title>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

           <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #ffffff;">
               <div class="featured-image mb-3">
                   <img src="{{ asset('images/logo.png') }}" class="img-fluid" style="width: 250px;">
               </div>
           </div>

           <div class="col-md-6 right-box">
              <div class="row align-items-center">
                    <div class="header-text mb-4">
                         <h2>Register</h2>
                         <p>Silahkan membuat akun</p>
                    </div>
                    <form action="{{route('actionregister')}}" method="post">
                    @csrf
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Role</label>
                            <select name="role" class="form-control">
                                <option value="admin">Customer</option>
                                <option value="customer">Customer</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-primary w-100 fs-6">Daftar</button>
                        </div>
                        <div class="don't have account">
                            <center><small>Memiliki Akun</small> <small><a href="{{route('login')}}" class="text-warning">Masuk</a></small></center>
                        </div>
                    </form>
              </div>
           </div>

       </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Y2x8q4+yOl5jL4K3oQ5I5aG5ywyT" crossorigin="anonymous"></script>
</body>
</html>
