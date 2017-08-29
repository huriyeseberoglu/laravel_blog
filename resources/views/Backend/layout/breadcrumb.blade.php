<h1 class="page-header">
    Dashboard
    <small>Statistics Overview</small>
</h1>
<ol class="breadcrumb">
    @for($x=1;$x<5;$x++)
        @if(Request :: segment($x)!='')
        <li class="active">
        <i class="fa fa-dashboard"></i>  {{ucfirst(Request :: segment($x))}}
        </li>
        @endif
    @endfor
</ol>
