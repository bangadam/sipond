<!-- No Induk Field -->
<div class="form-group">
    {!! Form::label('no_induk', 'No Induk:') !!}
    <p>{{ $kesehatan->no_induk }}</p>
</div>

<!-- Tgl Mulai Field -->
<div class="form-group">
    {!! Form::label('tgl_mulai', 'Tgl Mulai:') !!}
    <p>{{ $kesehatan->tgl_mulai }}</p>
</div>

<!-- Tgl Selesai Field -->
<div class="form-group">
    {!! Form::label('tgl_selesai', 'Tgl Selesai:') !!}
    <p>{{ $kesehatan->tgl_selesai }}</p>
</div>

<!-- Keluhan Field -->
<div class="form-group">
    {!! Form::label('keluhan', 'Keluhan:') !!}
    <p>{{ $kesehatan->keluhan }}</p>
</div>

<!-- Obat Field -->
<div class="form-group">
    {!! Form::label('obat', 'Obat:') !!}
    <p>{{ $kesehatan->obat }}</p>
</div>

<!-- Catatan Field -->
<div class="form-group">
    {!! Form::label('catatan', 'Catatan:') !!}
    <p>{{ $kesehatan->catatan }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $kesehatan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $kesehatan->updated_at }}</p>
</div>

