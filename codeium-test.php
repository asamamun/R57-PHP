<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
echo factorial(5);
?>
<!-- create bootstrap login form -->
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Sign In</h5>
          <form class="form-signin" action="login.php" method="POST">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email">
              <label for="inputEmail">Email address</label>
            </div>

            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
              <label for="inputPassword">Password</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            <hr class="my-4">
            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kVZsyjGUWDL6undefinedYOffset29WqA6xeRodTFYup8a5wWdhvv9s20M5t+lR/FBI6Tc8I9w" crossorigin="anonymous"></script>

</body>
</html>