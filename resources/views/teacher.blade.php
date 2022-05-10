@extends("nav")

@section("nav")

<div class="sections">

    <form method="POST" enctype="multipart/form" action="/teacher">
        @csrf

        <input type="text" name = "name" placeholder="Enter your name">
        <input type="text" name="username" placeholder="Enter your username">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="password_confirmation" placeholder="Enter your password">

        <button type="submit">Apply</button>
    </form>

</div>

@endsection
