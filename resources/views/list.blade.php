<table border="1">
    {{-- Multiple data --}}
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->body }}</td>
        </tr>
    @endforeach

    {{-- single Data --}}
    {{-- <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->title }}</td>
        <td>{{ $data->body }}</td>
    </tr> --}}
</table>
