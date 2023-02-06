<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            margin-top: 0;
            margin-left: -25px;
        }

        .table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 2px;
        }
    </style>
</head>

<body>
    <h1 class="text-center">Data Penanggung Jawab</h1>
    <table class="table table-bordered">
        <thead>
            <tr class="table-primary">
                <th>No</th>
                <th>Nama</th>
                <th>No KTP</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Pekerjaan</th>
                <th>Mulai Berlaku jadi Admin</th>
                <th>Berakhir jadi Admin</th>
                <th>Keterangan</th>
                <th>Status Keaktifan</th>
                <th>Keterangan Non-Aktif</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $admin->nama }}</td>
                    <td>{{ $admin->no_ktp }}</td>
                    <td>{{ date('d-m-Y', strtotime($admin->tanggal_lahir)) }}</td>
                    <td>{{ $admin->alamat }}</td>
                    <td>{{ $admin->status }}</td>
                    <td>{{ $admin->pekerjaan }}</td>
                    <td>{{ date('d-m-Y', strtotime($admin->tanggal_mulai)) }}</td>
                    <td>{{ date('d-m-Y', strtotime($admin->tanggal_akhir)) }}</td>
                    <td>{{ $admin->keterangan }}</td>
                    <td>{{ $admin->aktif == '0' ? 'Aktif' : 'Non-Aktif' }}</td>
                    <td>{{ $admin->keterangan_non_aktif }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
