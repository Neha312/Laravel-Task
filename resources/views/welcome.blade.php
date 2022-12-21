<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>

<body>

    {{-- Fetching Multiple data from db --}}
    {{-- @foreach ($students as $stud)
        {{ $stud->id }}
        {{ $stud->name }}
        {{ $stud->email }}
        {{ $stud->city }}
        {{ $stud->marks }}
        <br><br>
    @endforeach --}}

    {{-- Fetch data from find()-sigle data --}}
    {{-- for createOr() --}}
    {{-- @if ($students != null)
        { --}}
    {{-- {{ $students->id }}
    {{ $students->name }}
    {{ $students->email }}
    {{ $students->city }}
    {{ $students->marks }} --}}
    {{-- }
    @endif --}}

    {{-- collection Example-retur data --}}
    <h3>Array Result</h3>
    @foreach ($data as $collect)
        {{-- @foreach ($collection as $collect) --}}
        {{ $collect }}
        <br><br>
    @endforeach

    {{-- single data in collection --}}
    {{-- {{ $data }} --}}
</body>

</html>
