<!-- No Induk Field -->
<div class="form-group col-sm-12">
    {!! Form::label('no_induk', 'No Induk:') !!}
    {!! Form::select('no_induk', $bio_siswa, null, ['class' => 'form-control']) !!}
</div>

<!-- Tindakan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tindakan', 'Tindakan:') !!}
    {!! Form::text('tindakan', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Poin Field -->
<div class="form-group col-sm-12">
    {!! Form::label('poin', 'Poin:') !!}
    {!! Form::number('poin', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Pelanggaran Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tgl_pelanggaran', 'Tgl Pelanggaran:') !!}
    {!! Form::date('tgl_pelanggaran', null, ['class' => 'form-control','id'=>'tgl_pelanggaran']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('keterangan', 'Keterangan :') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control','id'=>'keterangan']) !!}
</div>

<!-- Score Field -->
<div class="form-group col-sm-12">
    {!! Form::label('skor', 'Score:') !!}
    {!! Form::number('skor', null, ['class' => 'form-control','id'=>'skor']) !!}
</div>

@section('scripts')
    <script src="assets/js/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <script>
        $('.select2').select2();
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pelanggaran.index') }}" class="btn btn-default">Cancel</a>
</div>
