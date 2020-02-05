<!-- No Induk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_induk', 'Nama Siswa:') !!}
    {!! Form::select('no_induk', $bio_siswa, null, ['class' => 'form-control select2']) !!}
</div>
@section('scripts')
    <script src="{{asset('admin/assets/js/pages/crud/forms/widgets/select2.js')}}"
            type="text/javascript"></script>
    <script>
        $('.select2').select2();
    </script>
@endsection

<!-- Id Jenis Bayar Field -->
<div class="form-group col-sm-6">
{!! Form::label('no_induk', 'Jenis Pembayaran:') !!}
    {!! Form::select('id_jenis_bayar', $jenis_bayar, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Id Produk Bayar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_produk_bayar', 'Jenis Produk Bayar:') !!}
    {!! Form::select('id_produk_bayar', $jenis_produk_bayar, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Jumlah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah', 'Jumlah:') !!}
    {!! Form::text('jumlah', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pembayarans.index') }}" class="btn btn-default">Cancel</a>
</div>
