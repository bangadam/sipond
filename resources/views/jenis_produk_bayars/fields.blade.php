<!-- Jenis Produk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_produk', 'Jenis Produk:') !!}
    {!! Form::text('jenis_produk', null, ['class' => 'form-control']) !!}
</div>

<!-- Nominal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nominal', 'Nominal:') !!}
    {!! Form::number('nominal', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('jenisProdukBayars.index') }}" class="btn btn-default">Cancel</a>
</div>
