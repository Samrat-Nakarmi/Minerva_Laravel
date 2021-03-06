<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}" />
    <title>Minerva | Login</title>
    <link rel="shortcut icon" href="asset{{('images/favicon.png')}}">
  </head>
  <body>
    <div class="container">
      <div class="login">
         <div class="container">
              <h1>LOGIN</h1>
              <form action="/login" enctype="multipart/form-data"" method="POST">
                @csrf
                <input type="text" placeholder="Username" name="username" required>
              <input type="password" placeholder="Password" name="password" required><br>
              <button type="submit" style="background-color: #2832C2;">Log in</button>
              </form>
              <div class="clearfix"></div>
         </div>
      </div>
      <div class="register">
          <div class="container">
            <img src="{{asset('images/main_dashboard.png')}}" width="300px" height="300px">
              <h2>Hello,there!</h2>
              <p>The beautiful thing about learning is nobody can take it away from you</p>
              <a href="/register"><button>Register <i class="fas fa-arrow-circle-right"></i></button></a>
          </div>
      </div>
    </div>
  </body>
</html>
