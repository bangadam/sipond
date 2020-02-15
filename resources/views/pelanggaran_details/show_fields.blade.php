<!-- No Induk Field -->
<div class="form-group">
    {!! Form::label('no_induk', 'Nama Santri:') !!}
    <p>{{ $pelanggaranDetail->bio_siswa->nama_lengkap }}</p>
</div>

<!-- Id Pelanggaran Field -->
<div class="form-group">
    {!! Form::label('id_pelanggaran', 'Jenis Pelanggaran:') !!}
    <p>{{ $pelanggaranDetail->pelanggaran->keterangan }}</p>
</div>

<!-- Id Tindakan Field -->
<div class="form-group">
    {!! Form::label('id_tindakan', 'Tindakan:') !!}
    <p>{{ $pelanggaranDetail->tindakan->nama_tindakan }}</p>
</div>

<!-- Catatan Field -->
<div class="form-group">
    {!! Form::label('catatan', 'Catatan:') !!}
    <p>{{ $pelanggaranDetail->catatan }}</p>
</div>

<!-- Poin Field -->
<div class="form-group">
    {!! Form::label('poin', 'Poin:') !!}
    <p>{{ $pelanggaranDetail->poin }}</p>
</div>

<!-- Tgl Pelanggaran Field -->
<div class="form-group">
    {!! Form::label('tgl_pelanggaran', 'Tgl Pelanggaran:') !!}
    <p>{{ $pelanggaranDetail->tgl_pelanggaran }}</p>
</div>

<!-- Created At Field -->
<!-- <div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pelanggaranDetail->created_at }}</p>
</div> -->

<!-- Updated At Field -->
<!-- <div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pelanggaranDetail->updated_at }}</p>
</div> -->

