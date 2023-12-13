<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.head')
</head>

<body id="Home">
    
    <main class="wrapper">
        <!-- HEADER -->
        @include('user.header')

        <!-- CONTENT -->
        @yield('content')

        <!-- FOOTER -->
        @include('user.footer')
    </main>

</body>

</html>
