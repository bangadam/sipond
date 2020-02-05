<!-- Jenis Bayar Field -->
<div class="form-group">
    {!! Form::label('jenis_bayar', 'Jenis Bayar:') !!}
    <p>{{ $jenisBayar->jenis_bayar }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $jenisBayar->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $jenisBayar->updated_at }}</p>
</div>

