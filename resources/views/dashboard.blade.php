@extends('template')
@section('content')
<div class="alert alert-danger m-3">
    dashboard
</div>

<form action="/logout" class="form-group" method="get">
    @csrf
    <button class="btn btn-danger">
        Logout
    </button>
</form>
@endsection
