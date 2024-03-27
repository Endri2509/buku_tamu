<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK PDF</title>
    <style>
        /* CSS untuk mengatur tata letak dan gaya tampilan */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Tabel Buku Tamu</h2>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Instansi</th>
                <th>Layanan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukutamu as $item)
            <tr>
                <td>{{ date( 'd-M-Y H:i:s',strtotime($item->created_at))  }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->instansi }}</td>
                <td>{{ $item->nama_layanan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
