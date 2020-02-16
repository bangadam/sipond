<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pelanggaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="container">
            <div class="col-md-6">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$bio_siswa->nama_lengkap}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Tindakan</th>
                            <th>Catatan</th>
                            <th>Tanggal Pelanggaran</th>
                            <th>Poin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bio_siswa->pelanggaranDetail as $item)
                            <tr>
                                <td>{{$item->tindakan->nama_tindakan}}</td>
                                <td>{{$item->catatan}}</td>
                                <td>{{date('d-m-Y', strtotime($item->tgl_pelanggaran))}}</td>
                                <td>{{$item->poin}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>Total Poin</td>
                            <td>{{$totalPoin}}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
</html>