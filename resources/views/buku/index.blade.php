<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Data Buku</h2>
		<div class="card">
			<div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Id</td>
                            <td>Judul Buku</td>
                            <td>Penulis</td>
                            <td>Harga</td>
                            <td>Tanggal Terbit</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach ($data_buku as $buku)
                        <tr>
                            <td>{{ $buku->id }}</td>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->penulis }}</td>
                            <td>{{ "Rp. ".number_format($buku->harga, 2, '.', '.') }}</td>
                            <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="">Edit</a>
					            <a class="btn btn-danger btn-sm" href="">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <p>Jumlah buku : {{ $count }} buku</p>
                <p>Total harga buku : {{ "Rp. ".number_format($total, 2, '.', '.') }}</p>
            </div>
        </div>
    </div>
</body>
</html>