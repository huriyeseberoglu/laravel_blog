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
@if(session('notify'))
    <script type="text/javascript">
        new PNotify({
            title:'Success!',
            text:'{{session('notify')}}',
            type:'success'
        });
    </script>
@endif