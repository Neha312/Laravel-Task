<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email send</title>
</head>

<body>
    <h1>Email</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ $emailData['name'] }}</td>
            <td>{{ $emailData['dob'] }}</td>
        </tr>

    </table>
    {{-- <p>Name:{{ $emailData['name'] }}</p>
    <p>DOB:{{ $emailData['dob'] }}</p> --}}
</body>

</html>
