<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts3.style')
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
        @include('layouts3.navbar')
        <!-- Page Body Start-->
        <div class="page-body-wrapper horizontal-menu">
            @include('layouts3.sidebar')
            @yield('content')
            @include('layouts3.footer')
        </div>
    </div>
    @include('layouts3.script')
</body>

</html>
