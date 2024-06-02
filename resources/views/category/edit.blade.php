@extends('template')
@section('content')
<div class="container m-3">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Tambah kategori</h1>
            @if (count($errors) > 0)
                    <div class="alert alert-dang">
                        <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                        </ul>
                    </div>     
            @endif
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group row mb-3">
                    <label for="" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                    </div>
                </div>
                <button class="btn btn-warning">Ubah</button>
            </form>  
        </div>
    </div>
</div>
@endsection