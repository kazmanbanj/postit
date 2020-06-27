<div class="row no-collapse-1">
    <section class="4u">
        <div class="box">
            <p>{{ $post->subject }}</p>
            <p>Created by {{ $post->user->name }} on: {{ $post->created_at->format('l jS \o\f F Y \a\t h:i:s A') }}</p>
            <!-- <p>Created by {{ $post->user->name }} at: {{ $post->created_at->toFormattedDateString() }}</p> -->
            <!-- <p>Created at: {{ $post->created_at->format('l jS \\of F Y h:i:s A') }}</p> -->
            <a href="/posts/{{ $post->id }}" class="button">Read More</a>
        </div>
    </section>
</div>