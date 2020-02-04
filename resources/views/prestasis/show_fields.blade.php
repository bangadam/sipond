<!-- Id Prestasi Field -->
<div class="form-group">
    {!! Form::label('id_prestasi', 'Id Prestasi:') !!}
    <p>{{ $prestasi->id_prestasi }}</p>
</div>

<!-- No Induk Field -->
<div class="form-group">
    {!! Form::label('no_induk', 'No Induk:') !!}
    <p>{{ $prestasi->no_induk }}</p>
</div>

<!-- Tgl Prestasi Field -->
<div class="form-group">
    {!! Form::label('tgl_prestasi', 'Tgl Prestasi:') !!}
    <p>{{ $prestasi->tgl_prestasi }}</p>
</div>

<!-- Jenis Prestasi Field -->
<div class="form-group">
    {!! Form::label('jenis_prestasi', 'Jenis Prestasi:') !!}
    <p>{{ $prestasi->jenis_prestasi }}</p>
</div>

<!-- Catatan Field -->
<div class="form-group">
    {!! Form::label('catatan', 'Catatan:') !!}
    <p>{{ $prestasi->catatan }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $prestasi->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $prestasi->updated_at }}</p>
</div>

