@extends('template')
@section('content')
    <div class="contai">
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
                <form action="{{ route('task.update', $task->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="name" value="{{ $task->name }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Deadline</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="deadline" value="{{ $task->deadline }}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Status</label>
                        <div class="col-8">
                            <select name="status" id="" class="form-control">
                                <option value="sedang dikerjakan">Sedang di kerjakan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-4 col-form-label">Deskripsi</label>
                        <div class="col-8">
                            <input type="textarea" class="form-control" name="description" value="{{$task->description }}">
                        </div>
                    </div>
                    <button class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
