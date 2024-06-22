<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reports</title>
    <style>
        /* Add your styles here */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Reports</h1>
    <table>
        <thead>
            <tr>
                <th>Id Tiket</th>
                <th>Nama Pemesan</th>
                <th>Paket Pesanan</th>
                <th>Tanggal Pembayaran</th>
                <th>Berapa Banyak Orang</th>
                <th>Fees</th>
                <th>Status</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->user->name }}</td>
                    <td>{{ $record->paketWisata->title }}</td>
                    <td>{{ $record->tanggal_pembayaran }}</td>
                    <td>{{ $record->pax }}</td>
                    <td>{{ $record->paketWisata->fees }}</td>
                    <td>{{ $record->status }}</td>
                    <td>{{ $record->tanggal_masuk }}</td>
                    <td>{{ $record->tanggal_keluar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
