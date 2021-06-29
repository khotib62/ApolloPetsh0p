<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Login</title>

    <link rel="icon" type="image/x-icon" href="assets/icon/title.png">

    <link rel="stylesheet" href="assetslogin/css/stylelogin.css">
  </head>
  <body>
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">LANDING PAGES OF ADMIN/USERS</h5>
            <form class="form-signin">
            <div class="text-center">
              <a class="btn btn-lg btn-primary btn-block text-uppercase col text-center" href="/admin">ADMIN</a>
              <hr class="my-4">

              <a class="btn btn-lg btn-primary btn-block text-uppercase" href ="{{route('products.index')}}"type="submit">USERS</a>
              <br><br>
              <a class="btn btn-lg btn-danger btn-block text-uppercase" href="/">Back to home</a>    
            </div>                
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
