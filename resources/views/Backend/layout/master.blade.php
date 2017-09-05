<!DOCTYPE html>
<html lang="tr">
@include('backend.layout.head')
<body>
<div id="wrapper">
   @include('backend.layout.navigation')
 <div id="page-wrapper">
 <div class="container-fluid">
 <!-- Page Heading -->
      <div class="row">
      <div class="col-lg-12">
          @include('backend.layout.breadcrumb')
          @yield('content')
       </div>
        </div>
<!-- /.row -->
     </div>
     </div>
     </div>
<!-- jQuery -->
<script src="/storage/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/storage/js/bootstrap.min.js"></script>
<script src="/storage/js/pnotify.custom.min.js"></script>

@if(count($errors->all())>0)
    <script type="text/javascript">
    @foreach($errors->all() as $error)
        new PNotify({
        title: 'Hata!',
        text:'{{$error}}',
        type:'error'

    });
    @endforeach
    </script>
@endif
@stack('js')
</body>
</html>
