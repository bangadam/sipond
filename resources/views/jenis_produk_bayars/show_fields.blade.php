<!-- Jenis Produk Field -->
<div class="form-group">
    {!! Form::label('jenis_produk', 'Jenis Produk:') !!}
    <p>{{ $jenisProdukBayar->jenis_produk }}</p>
</div>

<!-- Nominal Field -->
<div class="form-group">
    {!! Form::label('nominal', 'Nominal:') !!}
    <p>{{ $jenisProdukBayar->nominal }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $jenisProdukBayar->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $jenisProdukBayar->updated_at }}</p>
</div>

