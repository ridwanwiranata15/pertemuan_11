@extends('template')
@section('content')
   <div class="container">
        <h1>Daftar table tugas</h1>
        <div class="card mt-3">
            <div class="card-header">
                <h4>Data tabel</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{ route('task.create') }}" class="btn btn-primary btn-sm">Tambah data</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Deadline</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->status->name }}</td>
                                <td>{{ $task->deadline }}</td>
                                <td>{{ substr($task->description, 0, 50) }}...</td>

                                <td class="d-flex">
                                    <a href="/tasks/edit/{{ $task->id }}">
                                        <button class="btn btn-warning btn-sm">Ubah</button>
                                    </a>
                                    <form action="/tasks/delete/{{ $task->id }}" method="post"></form>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </a>

                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
   </div>
@endsection
