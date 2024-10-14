<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit Buku</h1>
        <form method="POST" action={{ route('buku.update', $buku -> id) }}>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pwd">Judul</label>
                <input type="text" class="form-control" id="pwd" name="judul" value="{{ $buku -> judul }}">
            </div>
            <div class="form-group">
                <label for="pwd">Penulis</label>
                <input type="text" class="form-control" id="pwd" name="penulis" value="{{ $buku -> penulis }}">
            </div>
            <div class="form-group">
                <label for="pwd">Harga</label>
                <input type="text" class="form-control" id="pwd" name="harga" value="{{ $buku -> harga }}">
            </div>
            <div class="form-group">
                <label for="pwd">Tanggal terbit</label>
                <input type="date" class="form-control" id="pwd" name="tgl_terbit" value="{{ $buku -> tgl_terbit }}">
            </div><br>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ '/buku' }}">Kembali</a>
        </form>
    </div>
</body>
</html>
    