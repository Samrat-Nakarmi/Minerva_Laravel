<link href="asset{{('css/footer.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
              {{-- {{ user.username }} --}}
            </a>
            <a class="nav-link"  id="new-course" href="/new" style="color: #ffff" role="button" aria-expanded="false">
               <p style="padding-left: 30px;">Courses</p>
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              {{-- {% if request.user|has_group:"teachers" %} --}}
              <li><a class="dropdown-item" href="/create_course" >Create Course</a></li>
              {{-- {% else %} --}}
              <li><a class="dropdown-item" href="/verify" >Apply for Teacher</a></li>
              {{-- {% endif %} --}}
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
@yield("nav")
