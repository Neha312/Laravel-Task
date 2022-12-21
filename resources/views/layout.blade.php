<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD Eloquent ORM</title>
</head>

<body>
    {{-- For Display Error Message --}}
    {{-- @if ($errors->any())
        {{ $errors }}
    @endif --}}

    {{-- Error Showing Using css --}}
    {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $message)
                <li><br><span class="d-inline p-2 bg-warning text-white">{{ $message }}</span></li>
            @endforeach
        </ul>
    @endif --}}

    <h3 align="center">Form</h3>
    <div class="container mt -5">
        <div class="row gy-5" style="display: block;">
            <div class="col">
                <form action="{{ route('create') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <br><br>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <br> <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                        @error('city')
                            <br> <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="radio" name="gender" value=1> Male
                        <input type="radio" name="gender" value=0> Female
                        @error('gender')
                            <br> <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lang" class="form-label">Programmimg Language</label><br>
                        <input type="checkbox" id="C" name="lang" value="C" />C<br>
                        <input type="checkbox" id="Java" name="lang" value="Java" checked=?yes? />Java<br>
                        <input type="checkbox" id="Python" name="lang" value="Python" />Python<br>
                        <input type="checkbox" id="PHP" name="lang" value="PHP" />PHP
                        @error('lang')
                            <br> <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name="marks">
                        @error('marks')
                            <br> <span class="text-warning">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="button" style=" text-align: center;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <br>
                @if (session()->has('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="col">
                <h3 align="center">Details</h3>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="cols">ID</th>
                            <th scope="cols">Name</th>
                            <th scope="cols">City</th>
                            <th scope="cols">Gender</th>
                            <th scope="cols">Programing language</th>
                            <th scope="cols">Marks</th>
                            <th scope="cols">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($practices as $pract)
                            <tr>
                                <th>{{ $pract->id }}</th>
                                <td>{{ $pract->name }}</td>
                                <td>{{ $pract->city }}</td>
                                <td>{{ $pract->gender }}</td>
                                <td>{{ $pract->lang }}</td>
                                <td>{{ $pract->marks }}</td>
                                <td>
                                    <a href="{{ url('edit', $pract->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ url('/delete', $pract->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <nav>

                    {{ $practices->links() }}

                    {{-- <ul class="pagination justify-content-center">

                        <li class="page-item">
                            <a href="" class="page-link">Previous</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="" class="page-link">Next</a>
                        </li>
                    </ul> --}}

                </nav>
                <style>
                    .w-5 {
                        display: inline;
                        width: 30px !important;
                    }
                </style>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
