@extends('backend.layout.master')
@section('subtitle')
<h1 class="page-header">
    Users
    <small>Create new users</small>
</h1>
@endsection
@section('content')
    <form role="form" action="{{route('users.store')}}" method="POST">

        <div class="form-group" {{ $errors->has('name') ? ' has-error' : '' }}>
            <label>Name</label>
            <input name="name" class="form-control" placeholder="User's name">
            @if($errors-> has('name'))
                <p class="help-block">{{$errors ->first('name')}}</p>
            @endif

        </div>

        <div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
            <label>E- Mail</label>
            <input name="email" class="form-control" placeholder="User's  email">
            @if($errors-> has('email'))
                <p class="help-block">{{$errors ->first('email')}}</p>
            @endif
        </div>

        <div class="form-group" {{ $errors->has('password') ? ' has-error' : '' }}>
            <label>Password</label>
            <input name="password" type="password" class="form-control" placeholder="User's  password">
            @if($errors-> has('password'))
                <p class="help-block">{{$errors ->first('password')}}</p>
            @endif
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