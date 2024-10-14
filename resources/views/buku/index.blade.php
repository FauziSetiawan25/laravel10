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
                        <a href="{{ route('buku.create') }}" class="btn btn-primary float-end">Tambah Buku</a>
                        <tr>
                            <td>No</td>
                            <td>Judul Buku</td>
                            <td>Penulis</td>
                            <td>Harga</td>
                            <td>Tanggal Terbit</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach ($data_buku as $index => $buku)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->penulis }}</td>
                            <td>{{ "Rp. ".number_format($buku->harga, 2, '.', '.') }}</td>
                            <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4">
                                        <form action="{{ route('buku.edit', $buku -> id) }}" method="GET">
                                            @csrf
                                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                                        </form>
                                    </div>
                                    <div class="col-md-4">
                                        <form action="{{ route('buku.destroy', $buku -> id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Yakin mau dihapus?')" 
                                            type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </div>
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