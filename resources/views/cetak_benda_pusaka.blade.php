<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1 class="text-center">Data Benda Pusaka</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Benda</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Keadaan Dahulu</th>
                <th>Kondisi Sekarang</th>
                <th>Asal Perolehan</th>
                <th>Tanggal Perolehan</th>
                <th>Tempat Penyimpanan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bendaPusaka as $bP)
                <tr>
                    <td class="text-capitalize">{{ $loop->iteration }}</td>
                    <td class="text-capitalize">{{ $bP->nama_benda }}</td>
                    <td class="text-capitalize">{{ $bP->kategori }}</td>
                    <td class="text-capitalize">{{ $bP->jumlah }}</td>
                    <td class="text-capitalize">{{ $bP->kondisi_dahulu }}</td>
                    <td class="text-capitalize">{{ $bP->kondisi_sekarang }}</td>
                    <td>{{ $bP->asal_perolehan }}</td>
                    <td>{{ $bP->tanggal_perolehan->format('d M Y') }}</td>
                    <td class="text-capitalize">{{ $bP->tempat_penyimpanan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
