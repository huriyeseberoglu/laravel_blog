@extends('backend.layout.master')
@section('subtitle')
<h1 class="page-header">
    Users
    <small> @lang('backend/user/user.userCreate')</small>
</h1>
@endsection
@section('content')
    <form role="form" action="{{route('users.store')}}" method="POST">

        <div class="form-group">
            <label>Name</label>
            <input name="name" class="form-control" placeholder="User's name" value="{{old('name')}}">
        </div>

        <div class="form-group" >
            <label>E- Mail</label>
            <input name="email" class="form-control" placeholder="User's  email" value="{{old('email')}}">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control" placeholder="User's  password">
        </div>

        <button type="submit" class="btn btn-default">Submit </button>
        <button type="reset" class="btn btn-default">Reset </button>
        {{csrf_field()}}
    </form>
@endsection




@push('css')

@endpush

@push('js')

@endpush