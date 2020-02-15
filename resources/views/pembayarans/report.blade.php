<!DOCTYPE html>
<html>
<head>
	<title>Report Pembayaran</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- jQuery first, then Popper.js and Bootstrap JS. -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</head>
<body onload="window.print()">
	<div class="row">
		<div class="container">
			<h4 class="text-center">Laporan pembayaran {{date('d/m/Y', strtotime($tgl_mulai)) ." - ". date('d/m/Y', strtotime($tgl_akhir))}}</h4>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nama siswa</th>
						<th>Jenis bayar</th>
						<th>Jenis produk</th>
						<th>Jumlah</th>
						<th>Catatan</th>
						<th>Tanggal Pembayaran</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($result as $item)
						<tr>
							<td>{{$item->bio_siswa->nama_lengkap}}</td>
							<td>{{$item->jenis_bayar->jenis_bayar}}</td>
							<td>{{$item->jenis_produk_bayar->jenis_produk}}</td>
							<td>{{$item->jumlah}}</td>
							<td>{{$item->catatan}}</td>
							<td>{{$item->tgl_pembayaran}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>