<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>CRUD Eloquent ORM</title>
</head>

<body>
    <div id="viewport">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">My APP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Artical</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="trashed">Trash</a>
            </li>
        </ul>
    </div>
    {{-- content --}}
    <div class="container-fluid">
        <h1 class="text-center  text-danger py-4">Articales</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="cols">ID</th>
                    <th scope="cols">Author</th>
                    <th scope="cols">Title</th>
                    <th scope="cols">Description</th>
                    <th scope="cols">Soft Delete</th>
                    <th scope="cols">Hard Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articals as $artical)
                    <tr>
                        <th scope="row">{{ $artical->id }}</th>
                        <td>{{ $artical->title }}</td>
                        <td>{{ $artical->author }}</td>
                        <td>{{ subStr($artical->description, 0, 30) }}</td>
                        <td><a href="softDelete/{{ $artical->id }}" class="text-warning btn"><i
                                    class="bi bi-trash3-fill"></i>Remove</td>
                        <td><a href="hardDelete/{{ $artical->id }}" class="text-danger btn"><i
                                    class='bi bi-trash3-fill'></i>Delete</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
