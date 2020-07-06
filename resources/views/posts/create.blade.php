@extends ('layouts.master')

@section('content')
<h3 style="text-align:center">Publish a Post</h3>
<form method="POST" action="/posts">
@csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" class="form-control" required/>
    </div>

    <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" class="form-control" required/>
    </div>

    <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
    </div>

    @include('layouts.errors')
</form>
@endsection