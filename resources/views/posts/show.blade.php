@extends ('layouts.master')

@section('content')
<div id="extra">
    <div class="container">
        <div class="row">
            <div class="pre-box">
                <div class="box">
                    <h2><u>{{ $post->title }}</u></h2>
                    <h1>{{ $post->subject }}</h1>
                    <p>by {{ $post->user->name }} on: {{ $post->created_at->format('l jS \o\f F Y \a\t h:i:s A') }}</p>
                    <!-- <p>Created by {{ $post->user->name }} at: {{ $post->created_at->toFormattedDateString() }}</p> -->
                    <!-- <p>Created at: {{ $post->created_at->format('l jS \\of F Y h:i:s A') }}</p> -->
                    <p>{{ $post->body }}</p>

                    <hr>

                    <div class="comments">
                        <u>Comments</u>
                        <ul class="list-group">
                            @foreach ($post->comments as $comment)
                            <li class="list-group-item">
                                <strong>by {{ $comment->user->name }} at {{ $comment->created_at->diffForHumans() }}:&nbsp;</strong>{{ $comment->body }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <hr>

                    <div class="card">
                        <div class="card-block">
                            <form method="POST" action="/posts/{{ $post->id }}/comments">
                            @csrf
                                <div class="form-group">
                                    <label for="body">Body:</label>
                                    <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Your Comment Here"
                                        required></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add comment</button>
                                </div>
                            </form>
                            @include('layouts.errors')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection