<!-- No Induk Field -->
<div class="form-group col-sm-12">
    {!! Form::label('no_induk', 'Nama Siswa:') !!}
    {!! Form::select('no_induk', $bio_siswa , null, ['class' => 'form-control select2']) !!}
</div>

<!-- Tgl Izin Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tgl_izin', 'Tgl Izin:') !!}
    {!! Form::date('tgl_izin', null, ['class' => 'form-control','id'=>'tgl_izin']) !!}
</div>

<!-- Tgl Kembali Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tgl_kembali', 'Tgl Kembali:') !!}
    {!! Form::date('tgl_kembali', null, ['class' => 'form-control','id'=>'tgl_kembali']) !!}
</div>

<!-- Penjemput Field -->
<div class="form-group col-sm-12">
    {!! Form::label('penjemput', 'Penjemput:') !!}
    {!! Form::text('penjemput', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::textarea('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Izin Field -->
<div class="form-group col-sm-12">
    {!! Form::hidden('status_izin', "Belum Kembali", ['class' => 'form-control']) !!}
</div>

@section('scripts')
    <script src="{{asset('admin/assets/js/pages/crud/forms/widgets/select2.js')}}"
            type="text/javascript"></script>
    <script>
        $('.select2').select2();
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('perizinans.index') }}" class="btn btn-default">Cancel</a>
</div>
