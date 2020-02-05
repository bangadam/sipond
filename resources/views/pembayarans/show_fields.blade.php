<!-- No Induk Field -->
<div class="form-group">
    {!! Form::label('no_induk', 'No Induk:') !!}
    <p>{{ $pembayaran->no_induk }}</p>
</div>

<!-- Id Jenis Bayar Field -->
<div class="form-group">
    {!! Form::label('id_jenis_bayar', 'Id Jenis Bayar:') !!}
    <p>{{ $pembayaran->id_jenis_bayar }}</p>
</div>

<!-- Id Produk Bayar Field -->
<div class="form-group">
    {!! Form::label('id_produk_bayar', 'Id Produk Bayar:') !!}
    <p>{{ $pembayaran->id_produk_bayar }}</p>
</div>

<!-- Jumlah Field -->
<div class="form-group">
    {!! Form::label('jumlah', 'Jumlah:') !!}
    <p>{{ $pembayaran->jumlah }}</p>
</div>

<!-- Catatan Field -->
<div class="form-group">
    {!! Form::label('catatan', 'Catatan:') !!}
    <p>{{ $pembayaran->catatan }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pembayaran->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pembayaran->updated_at }}</p>
</div>

