<!DOCTYPE html>
<html lang="en">

<head>
    @include('guest.layouts.head')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">
        @include('guest.layouts.responsive')
        @include('guest.layouts.navbar')
        <br><br><br>

        @yield('content')

        @include('guest.layouts.footer')

    </div>
<!-- .site-wrap -->


<!-- loader -->
@include('guest.layouts.loader_circle')
@include('guest.layouts.scripts')

</body>

</html>