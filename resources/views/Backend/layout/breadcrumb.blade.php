@yield('subtitle')
<ol class="breadcrumb">
        @foreach(Request::segments() as $segment)
            <li class="active">
                {{ucfirst($segment)}}
            </li>
        @endforeach
</ol>
