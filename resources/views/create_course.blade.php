@extends("dashboard")

    <br>
    <br>

    <div  class="course-card" style="text-align: center;margin-left: 25rem;">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
<form action="" method="POST" style="text-align: center;margin-top:5rem" enctype="multipart/form-data">
    @csrf
    <h1 style="font-weight: bold;">CREATE COURSE</h1><br>
        <p style="text-align: center;">Name :</p><br><br>
        <br><br>
        <p style="text-align: center; margin-left: 7rem;">Picture : </p><br><br>
        <input type="submit" value="Create Course" class="btn btn-primary">
    </form>
    </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

