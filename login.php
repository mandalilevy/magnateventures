<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> LOGIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

         <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
    </head>
    <body class="bg-light">
      <div class="container">


  </div>
        <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-5 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            
              <form class="form-signin" method="post" action="process.php">
              <div class="form-group row">
                  <label for="inputEmail">Email address</label>
                  <input type="email" id="inputEmail" name="name" class="form-control" placeholder="Email address" >           
              </div>
              <div class="form-group row">
                  <label for="inputPassword">ID Number</label>
                  <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" >              
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
   
</html>
