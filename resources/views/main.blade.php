<!DOCTYPE html>
<html lang="en">
@include('_partials/head')
<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
@include('_partials/sidebar')
<!-- Page content wrapper-->
    <div id="page-content-wrapper" style="background-color: #F0F0F0;">
        <!-- Top navigation-->
    @include('_partials/nav')
    <!-- Page content-->
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
