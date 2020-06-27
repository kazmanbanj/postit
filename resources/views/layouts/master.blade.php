@include ('layouts.head')

<body>

    <!-- Wrapper -->
    <div class="wrapper style1">

        @include ('layouts.nav')

        @yield ('content')

    </div>

    @include ('layouts.footer')

</body>

</html>