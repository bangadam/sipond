<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Pelanggaran</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Pelanggaran
            </div>
            <div class="card-body">
                <a href="/pelanggaran/tambah" class="btn btn-primary">Tambah Pelanggaran</a>
                <br />
                <br />
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Keterangan</th>
                            <th>Skor</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pelanggaran as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->keterangan }}</td>
                            <td>{{ $p->skor }}</td>
                            <td>
                                <a href="/pelanggaran/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                <a href="/pelanggaran/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>