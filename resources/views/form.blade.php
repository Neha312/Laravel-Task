<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <br>
    @if (session()->has('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('register') }}" method="post" autocomplete="off" enctype="multipart/form-data">
        @csrf
        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}
        <div class="container mt-5">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                <span class="text-danger">
                    @error('name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text " name="email" id="" class="form-control" value="{{ old('email') }}">
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for=""> Confirm Password</label>
                <input type="password" name="password_confirm" id="" class="form-control">
                <span class="text-danger">
                    @error('password_confirm')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Start Date</label>
                <input type="Date" name="startdate" id="" class="form-control">
                <span class="text-danger">
                    @error('startdate')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">End Date</label>
                <input type="Date" name="enddate" id="" class="form-control">
                <span class="text-danger">
                    @error('enddate')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Marks</label>
                <input type="text" name="marks" id="" class="form-control">
                <span class="text-danger">
                    @error('marks')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">File</label>
                <input type="file" name="file_name" id="" class="form-control">
                <span class="text-danger">
                    @error('file_name')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <br>
            <button class="btn btn-primary">Submit</button>
        </div>
        <div class="container mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="cols">ID</th>
                        <th scope="cols">Name</th>
                        <th scope="cols">Email</th>
                        <th scope="cols">Start Date</th>
                        <th scope="cols">End Date</th>
                        <th scope="cols">Marks</th>
                        <th scope="cols">Image File</th>
                        <th scope="cols">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($regitrations as $reg)
                        <tr>
                            <th scope="row">{{ $reg->id }}</th>
                            <td>{{ $reg->name }}</td>
                            <td>{{ $reg->email }}</td>
                            <td>{{ $reg->startdate }}</td>
                            <td>{{ $reg->enddate }}</td>
                            <td>{{ $reg->marks }}</td>
                            {{-- <td>{{ $reg->password }}</td> --}}
                            <td> <img src="{{ asset('storage/registers/' . $reg->file_name) }}" height="80"
                                    width="80" alt="no">
                            </td>
                            <td><a href="{{ url('edit', $reg->id) }}" class="text-warning btn"><i
                                        class="bi bi-trash3-fill"></i>Edit
                            </td>
                            <td><a href="{{ url('delete', $reg->id) }}" class="text-danger btn"><i
                                        class='bi bi-trash3-fill'></i>Delete
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span>
                {{ $regitrations->links() }}
            </span>
            <br>
            <style>
                .w-5 {
                    display: none;
                }
            </style>

        </div>
        </div>
    </form>
    <br>
    {{-- @if (isset($data))
        @foreach ($data as $item)
            <li> {{ $item }}</li>
        @endforeach
    @endif --}}
</body>

</html>
