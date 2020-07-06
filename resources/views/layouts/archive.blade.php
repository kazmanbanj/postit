
<div class="container archive_top">
    <hr>
    <div class="row">
        <div class="6u">
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    Archives
                </div>
                <ol class="list-group list-group-flush">
                    @foreach ($archives as $stats)
                    <li class="list-group-item"><a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{ $stats['month'] . ' ' . $stats['year'] }}</a></li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>