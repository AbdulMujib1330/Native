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

            <div class=" mt-md-3 mb-5">

              <h2 class="fw-bold mb-5 text-uppercase">Register</h2>
              <!-- <p class="text-white-50 mb-5">Please enter your login and password!</p> -->

              <div class="form-outline form-white">
                <input type="text" name="nama" require placeholder="Nama Petugas" id="" class="form-control form-control-lg" />
                <label class="form-label" for=""></label>
              </div>

              <div class="form-outline form-white">
                <input type="text" name="username" require placeholder="Username" id="" class="form-control form-control-lg" />
                <label class="form-label" for=""></label>
              </div>
              
              <div class="form-outline form-white">
                <input type="number" name="no_telp" require placeholder="No Telepon" id="" class="form-control form-control-lg" />
                <label class="form-label" for=""></label>
              </div>
              
              <option value="admin" class="mb-2"></option>


              <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>

            </div>

            <div class="mb-2">
              <a href="login.php" class="text-white-50 fw-bold">Log-In <a class="text-light">/</a><a onclick="return confirm('Ingin Keluar?')"  href="home.php  " class="text-primary-50 fw-bold"> Home</a></a>
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