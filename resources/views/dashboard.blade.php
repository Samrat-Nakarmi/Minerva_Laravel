
<!DOCTYPE html>
<html lang="en">
<head>
  <script>window.CKEDITOR_BASEPATH = '/static/ckeditor/ckeditor/';</script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="asset{{('css/footer.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Minerva</title>
    <link rel="shortcut icon" href="asset{{('images/favicon.png')}}">
</head>
<body style="background-color: #f5f5ff;">
   <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%; background-clip: content-box; box-shadow: inset 0 0 0 10px #2832C2;">
  <div class="container-fluid" style="background-color: #2832C2;">
    <a class="navbar-brand" href="/"><img src="/static/images/main.png" width="50px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <div class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle" href="#" style="color: #ffff" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          </a>
          <a class="nav-link"  id="new-course" href="/new" style="color: #ffff" role="button" aria-expanded="false">
             <p style="padding-left: 30px;">Courses</p>
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/create_course" >Create Course</a></li>
            <li><a class="dropdown-item" href="/verify" >Apply for Teacher</a></li>
            <li><a class="dropdown-item" href="/change">Edit Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>

        </div>

      </ul>
<form style=" margin-right: 10%; overflow: hidden;" method="get" action="/search" >
        <input class="form-control me-2" type="search" placeholder="Search" name='q' aria-label="Search" style="height:50%; width: 200%;">

  </form>



    </div>
  </div>
</nav>
{{-- {% block body %}{%endblock%} --}}

    <div class="footer-dark" style="width: 100%; margin-top: 50rem;background-color: #2832C2;">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h2>About</h2>
                        <ul>
                            <li><a href="#">Piratica</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h2></h>Piratica</h2>
                        <p>  Our goal is to provide a simple and easy way for everyone to acquire knowledge on various topics from base level to mastery, all free of cost. We see open source as a future of software development. </p>
                    </div>
                    <div class="col">
                      <a href="https://github.com/apurbadh"> <img class="avatar" src="https://avatars.githubusercontent.com/u/65907464?v=4" > <i class="icon"></i></a>
                      <a href="https://github.com/ashshelby"><img class="avatar" src="https://avatars.githubusercontent.com/u/67235783?v=4"> <i class="icon"></i></a>
                      <a href="https://github.com/samrat-nakarmi"> <img class="avatar" src="https://scontent.fbwa1-1.fna.fbcdn.net/v/t1.6435-1/s200x200/137006842_2890755514502832_1290393176386706807_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=7206a8&_nc_ohc=TLVXSWPttDUAX99w1ZQ&_nc_ht=scontent.fbwa1-1.fna&oh=eda0655936fb1548553e225a0631fffa&oe=61582C9E"> <i class="icon"></i></a>
                      <a href="https://github.com/Ashwot-Acharya"> <img class="avatar" src="https://avatars.githubusercontent.com/u/77325112?v=4"> <i class="icon"></i></a>
                    </div>
                </div>
                <p class="copyright">Piratica © 2021</p>
            </div>
        </footer>
    </div>
</body>
</html>
<style>
  .avatar {
    border-radius: 50%;
    height: 57px;
    padding: 5px;

  }
  #new-course{
    padding-left: 3px;
  }
</style>

@yield("content")
