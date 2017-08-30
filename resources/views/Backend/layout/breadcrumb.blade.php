@yield('subtitle')
<ol class="breadcrumb">
    @for($x=1;$x<5;$x++)
        @if(Request :: segment($x)!='')
        <li class="active">
         {{ucfirst(Request :: segment($x))}}
        </li>
        @endif
    @endfor
</ol>
