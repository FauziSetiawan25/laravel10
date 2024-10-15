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
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
</head>
<body>
    <div class="container">
        <h1>Edit Buku</h1>
        @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul style="list-style: none">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
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
                <input type="text" class="date form-control" id="tgl_terbit" name="tgl_terbit" value="{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('Y/m/d') }}">
            </div><br>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ '/buku' }}">Kembali</a>
        </form>
    </div>
    <script type="text/javascript">
        $('.date').datepicker({
            dateFormat: 'yy/mm/dd',
            autoclose: true
        });
    </script>
</body>
</html>
    