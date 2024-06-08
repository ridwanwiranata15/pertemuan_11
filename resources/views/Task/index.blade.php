@extends('template')
@section('content')
    <div class="container mt-3">
        <h1>Data tugas</h1>
        {{auth()->user()->role}}
<a href="{{ route('task.create') }}">
    <button class="btn btn-primary">Tambah</button>
</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">deadline</th>
            
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $task["name"] }}</td>
              <td>{{ $task["description"] }}</td>
              <td>{{ $task["deadline"] }}</td>
              <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
                <form action="/detail/{{$task["id"]}}" method="get">
                    <button class="btn btn-primary">Detail</button>
                </form>
            </td>
            </tr>
            

            @endforeach
        </tbody>
    </div>
@endsection
