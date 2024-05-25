<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
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
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
