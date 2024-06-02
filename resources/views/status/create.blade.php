@extends('template')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Status</h5>
                @if (count($errors) > 0)
                    <div class="alert alert-dang">
                        <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                        </ul>
                    </div>     
                @endif
                <form action="{{ route('status.store') }}" method="post">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <button class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection