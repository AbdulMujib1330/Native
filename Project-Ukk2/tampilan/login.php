<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <title>Login</title>
</head>
  <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<body>
  <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<form action="../proses/admin_login.php" method="post">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" >
          <div class="card-body p-5 py-2 text-center">

            <div class=" mt-md-4 mb-5">

              <h2 class="fw-bold mb-5 text-uppercase">Login</h2>
              <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->

              <div class="form-outline form-white">
                <input type="text" name="nama" id="" required placeholder="Nama" class="form-control form-control-lg" />
                <label class="form-label" for=""></label>
              </div>

              <div class="form-outline form-white pb-4 mb-5 mb-4">
                <input type="text" name="username" id="" required placeholder="Username" class="form-control form-control-lg" />
                <label class="form-label" for=""></label>
              </div>


              <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>

            </div>

            <div class="mt-5 mb-1">
              <p class="mb-0">Don't have an account? <a href="registrasi.php" class="text-white-50 fw-bold">Sign-Up <a class="text-light">/</a><a onclick="return confirm('Ingin Keluar?')"  href="home.php" class="text-white-50 fw-bold"> Home</a></a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
</body>
</html>