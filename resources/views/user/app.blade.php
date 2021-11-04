<!DOCTYPE html>
<html lang="en">
    <head>
        @include('user/layouts/head')
    </head>
    <body>
        @include('user/layouts/header')

        <!-- Main-->
        @yield('main-content')


        <!-- Footer-->
        <footer class="border-top">
            @include('user/layouts/footer')
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('user/js/scripts.js') }}"></script>
    </body>
</html>
