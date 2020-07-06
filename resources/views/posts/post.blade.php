<div class="container">
    <div class="row">

        <div class="col-sm-8">
            <div class="card-deck">
                <div class="card cardmrg">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->subject }}</h5>
                        <p class="card-text">Created by {{ $post->user->name }} on:
                            {{ $post->created_at->format('l jS \o\f F Y \a\t h:i:s A') }}</p>
                        <a href="/posts/{{ $post->id }}" class="btn btn-primary">Read More</a>
                        <p class="card-text"><small class="text-muted">Last updated
                                {{ $post->created_at->diffForHumans() }}</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card-deck">
                <div class="card cardmrg">
                    <div class="card-body">
                    <u>Comments</u>
                        <ul class="list-group">
                            @foreach ($post->comments as $comment)
                            <li class="list-group-item">
                                <strong>by {{ $comment->user->name }} at {{ $comment->created_at->diffForHumans() }}: </strong>
                                {{ $comment->body }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>