@extends('backend.layout.master')
@section('subtitle')
    <h1 class="page-header">
        Users
        <small> @lang('backend/user/user.userlist')</small>
    </h1>
@endsection
@section('content')
    {!!  $dataTable -> table() !!}
@endsection
@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.js">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.cs">
@endpush
@push('js')
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!!  $dataTable -> scripts() !!}}
@endpush