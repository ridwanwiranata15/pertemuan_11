@extends('template')
@section('content')
    <div class="container">
        .<div class="card">
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
                <form action="{{ route('status.update', $status->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="name" value="{{$status->name}}">
                        </div>
                    </div>
                    <button class="btn btn-warning">Ubah</button>
                </form>
            </div>
        </div>
    </div>
@endsection