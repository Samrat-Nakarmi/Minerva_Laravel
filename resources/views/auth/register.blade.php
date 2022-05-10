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
    <link rel="shortcut icon" href="/static/images/main.png">
    <script>
      window.onload = () => {
        let inputs = document.getElementsByTagName("input")
        inputs[1].placeholder = "Username"
        inputs[2].placeholder = "Email"
        inputs[3].placeholder = "Password"
        inputs[4].placeholder = "Confirm Password"
      }
    </script>
    <title>Minerva | Register</title>
  </head>
  <body>
    <div class="container">
      <div class="login">
         <div class="container">
              <h1>Register</h1>
              <form action="/register" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <br>

              <button type="submit" style="background-color: #2832C2;">Register</button>

              </form>
              <div class="clearfix"></div>
         </div>
      </div>
      <div class="register">
          <div class="container">
                        <img src="{{asset('images/main_dashboard.png')}}" height="300px" width="300px">

              <h2>Hello,there!</h2>
              <p>Excited to learn something new ?</p>
              <a href="/login"><button>Login <i class="fas fa-arrow-circle-right"></i></button></a>
          </div>
      </div>
    </div>
  </body>
</html>
