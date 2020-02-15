<!-- Nama Tindakan Field -->
<div class="form-group">
    {!! Form::label('nama_tindakan', 'Nama Tindakan:') !!}
    <p>{{ $tindakan->nama_tindakan }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tindakan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tindakan->updated_at }}</p>
</div>

