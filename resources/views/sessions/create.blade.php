@extends ('layouts.master')

@section ('content')
<h1 class="text-center">Sign in</h1>
<form action="/login" method="post">
    {{ csrf_field() }}

    <div class="form form-group">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>

    @include('layouts.errors')
</form>
@endsection