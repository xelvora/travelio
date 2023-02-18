<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>ID</th>
            <th>Username</th>
            <th>Nationality</th>
            <th>Is Visa</th>
            <th>Doe Passport</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        @foreach ($detail as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->transaksi->username}}</td>
            <td>{{ $row->nationality }}</td>
            <td>{{ $row->is_visa }}</td>
            <td>{{ $row->doe_passport }}</td>
        </tr>
        @endforeach
    </tbody>
</table>>
