@include('template.header')
<!-- Sidenav -->
@include('template.sidebar')
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('template.topbar')
    <!-- Header -->
    <!-- Header -->
    @include('template.head')
    <!-- Page content -->
    <div class="container-fluid mt--6">
    @yield('content')
@include('template.footer')
