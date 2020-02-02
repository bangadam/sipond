<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Pelanggaran</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Pelanggaran - <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                <a href="/pelanggaran" class="btn btn-primary">Kembali</a>
                <br />
                <br />

                <form method="post" action="/pelanggaran/store">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan ..">
                    </div>
                    <div class="form-group">
                        <label>Skor</label>
                        <input type="text" name="skor" class="form-control" placeholder="Skor ..">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>