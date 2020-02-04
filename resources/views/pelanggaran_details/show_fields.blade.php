<!-- No Induk Field -->
<div class="form-group">
    {!! Form::label('no_induk', 'No Induk:') !!}
    <p>{{ $pelanggaranDetail->no_induk }}</p>
</div>

<!-- Tindakan Field -->
<div class="form-group">
    {!! Form::label('tindakan', 'Tindakan:') !!}
    <p>{{ $pelanggaranDetail->tindakan }}</p>
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

<!-- Keterangan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('keterangan', 'Keterangan :') !!}
    <p>{{$pelanggaranDetail->pelanggaran->keterangan}}</p>
</div>

<!-- Score Field -->
<div class="form-group col-sm-12">
    {!! Form::label('skor', 'Score:') !!}
    <p>{{$pelanggaranDetail->pelanggaran->skor}}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pelanggaranDetail->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pelanggaranDetail->updated_at }}</p>
</div>

