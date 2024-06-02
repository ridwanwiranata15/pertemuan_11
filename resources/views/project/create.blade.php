@extends('template')
@section('content')
    <div class="container">
        <h1>Tambah data tugas</h1>
        <div class="card">
            <div class="card-body">
                @if (count($errors) > 0)
                <div class="alert alert-dang">
                <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                </ul>
                </div>
            @endif
                <form action="{{ route('project.store') }}" method="post">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="description" value="{{ old('description') }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Status</label>
                        <div class="col-8">
                            <select name="status_id" id="" class="form-control" value="{{ old('status') }}">
                                <option value="">Pilih status</option>
                                @foreach ($status as $key)
                                <option value="{{ $key->id }}">{{ $key->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Kategori</label>
                        <div class="col-8">
                            <select name="categories_id" id="" class="form-control" value="{{ old('category') }}">
                                <option value="">Pilih kategori</option>
                                @foreach ($categories as $key)
                                <option value="{{ $key->id }}">{{ $key->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Tanggal dimulai</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="start_date" value="{{ old('description') }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Tanggal berakhir</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="end_date" value="{{ old('description') }}">
                        </div>
                    </div>
                    <button class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
