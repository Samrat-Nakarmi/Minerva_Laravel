{{-- @extends("dashboard") --}}
@extends("nav")
@extends("footer")

@section("nav")
<div style="text-align:center">
    <form method="POST" style="margin-top :10rem; margin-bottom:10rem;">
        <h1>You need to verify the account</h1>

        @csrf
        <button type="submit" class="btn btn-primary">Verify</button>
    </form>
    </div>
    <br>
@endsection


@section("footer")
@endsection


