<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.style')
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
        @include('layouts.navbar')
        <!-- Page Body Start-->
        <div class="page-body-wrapper horizontal-menu">
            @include('layouts.sidebar')
            @yield('content')
            @include('layouts.footer')
        </div>
    </div>
    @include('layouts.script')
</body>

</html>
