@extends('template')
@section('content')

    <div class="container mt-3">
        <h1>Data Projek</h1>
        <a href="{{ route('project.create') }}">
            <button class="btn btn-primary">Tambah</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Status</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tanggal di mulai</th>
                    <th scope="col">Tanggal berakhir</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td scope="col">{{$loop->iteration}}</td>
                    <td scope="col">{{$project->name}}</td>
                    <td scope="col">{{ $project->description }}</td>
                    <td scope="col">{{ $project->status->name }}</td>
                    <td scope="col">{{ $project->category->name }}</td>
                    <td scope="col">{{ $project->start_date }}</td>
                    <td scope="col">{{ $project->end_date }}</td>
                    <td scope="col" class="d-flex">
                        <form action="{{ route('project.edit', $project->id) }}" method="get">
                            @csrf
                            <button class="btn btn-warning">Edit</button>
                        </form>
                        <form action="{{ route('project.delete', $project->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection