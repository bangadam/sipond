<!-- No Induk Field -->
<div class="form-group col-sm-12">
    {!! Form::label('no_induk', 'Nama Siswa:') !!}
    {!! Form::select('no_induk', $bio_siswa, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Tgl Mulai Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tgl_mulai', 'Tgl Mulai:') !!}
    {!! Form::date('tgl_mulai', null, ['class' => 'form-control','id'=>'tgl_mulai']) !!}
</div>
<!-- Tgl Selesai Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tgl_selesai', 'Tgl Selesai:') !!}
    {!! Form::date('tgl_selesai', null, ['class' => 'form-control','id'=>'tgl_selesai']) !!}
</div>

@section('scripts')
    <script src="{{asset('admin/assets/js/pages/crud/forms/widgets/select2.js')}}"
            type="text/javascript"></script>
    <script>
        $('.select2').select2();
    </script>
@endsection

<!-- Keluhan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('keluhan', 'Keluhan:') !!}
    {!! Form::text('keluhan', null, ['class' => 'form-control']) !!}
</div>

<!-- Obat Field -->
<div class="form-group col-sm-12">
    {!! Form::label('obat', 'Obat:') !!}
    {!! Form::text('obat', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::textarea('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('kesehatans.index') }}" class="btn btn-default">Cancel</a>
</div>
