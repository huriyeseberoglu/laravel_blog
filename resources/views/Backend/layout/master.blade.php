<!DOCTYPE html>
<html lang="tr">
@include('backend.layout.head')
<body>
<div id="wrapper">
   @include('backend.layout.navigation')
 <div id="page-wrapper">
   <div class="container-fluid">
   @yield('content')
     </div>
     </div>
     </div>
<!-- jQuery -->
<script src="/storage/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/storage/js/bootstrap.min.js"></script>
@yield('js')
</body>
</html>
