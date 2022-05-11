@extends("nav")

@section("nav")

<div class="sections">

    <form method="POST" enctype="multipart/form" action="/teacher">
        @csrf
        @error('name')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
        @enderror
        <input type="text" name = "name" placeholder="Enter your name">
        @error('username')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
        @enderror
        <input type="text" name="username" placeholder="Enter your username">
        @error('email')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
        @enderror
        <input type="email" name="email" placeholder="Enter your email">
        @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
        @enderror
        <input type="password" name="password" placeholder="Enter your password">
        @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
        @enderror
        <input type="password" name="password_confirmation" placeholder="Enter your password">

        <button type="submit">Apply</button>
    </form>

</div>

@endsection
