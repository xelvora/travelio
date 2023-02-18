<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Generate PDF Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>Laporan</h1>

    <table class="table table-bordered">
        <tr>
                                                        <th>ID</th>
                                                        <th>Username</th>
                                                        <th>Nationality</th>
                                                        <th>Is Visa</th>
                                                        <th>Doe Passport</th>
        </tr>
        @foreach ($detail as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->transaksi->username}}</td>
            <td>{{ $row->nationality }}</td>
            <td>{{ $row->is_visa }}</td>
            <td>{{ $row->doe_passport }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
