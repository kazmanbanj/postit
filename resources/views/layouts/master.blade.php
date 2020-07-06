@include ('layouts.head')

<body>

    <!-- Wrapper -->
    <div class="wrapper style1">

        @include ('layouts.nav')


                @yield ('content')
                @include ('layouts.archive')


    </div>

    @include ('layouts.footer')

</body>

</html>