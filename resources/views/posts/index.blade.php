@extends ('layouts.master')

@section('content')

<!-- Extra -->
<div id="extra">
    <div class="container">
        @foreach($posts as $post)
            @include ('posts.post')
        @endforeach
        <div class="row no-collapse-1">
            <section class="4u">
                <div class="box">
                    <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum wisi maecenas
                        ligula.</p>
                    <a href="#" class="button">Read More</a>
                </div>
            </section>
            <section class="4u">
                <div class="box">
                    <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum wisi maecenas
                        ligula.</p>
                    <a href="#" class="button">Read More</a>
                </div>
            </section>
            <section class="4u">
                <div class="box">
                    <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum wisi maecenas
                        ligula.</p>
                    <a href="#" class="button">Read More</a>
                </div>
            </section>
        </div>
        <div class="row no-collapse-1">
            <section class="4u">
                <div class="box">
                    <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum wisi maecenas
                        ligula.</p>
                    <a href="#" class="button">Read More</a>
                </div>
            </section>
            <section class="4u">
                <div class="box">
                    <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum wisi maecenas
                        ligula.</p>
                    <a href="#" class="button">Read More</a>
                </div>
            </section>
            <section class="4u">
                <div class="box">
                    <p>Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum wisi maecenas
                        ligula.</p>
                    <a href="#" class="button">Read More</a>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Main -->
<div id="main">
    <div class="container">
        <div class="row">

            <!-- Content -->
            <div class="6u">
                <section>
                    <ul class="style">
                        <li class="fa fa-wrench">
                            <h3>Integ ultrices</h3>
                            <span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula.
                                Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim
                                tincidunt risus accumsan.</span>
                        </li>
                        <li class="fa fa-leaf">
                            <h3>Aliquam luctus</h3>
                            <span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula.
                                Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim
                                tincidunt risus accumsan.</span>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="6u">
                <section>
                    <ul class="style">
                        <li class="fa fa-cogs">
                            <h3>Integer ultrices</h3>
                            <span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula.
                                Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim
                                tincidunt risus accumsan.</span>
                        </li>
                        <li class="fa fa-road">
                            <h3>Aliquam luctus</h3>
                            <span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula.
                                Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim
                                tincidunt risus accumsan.</span>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection