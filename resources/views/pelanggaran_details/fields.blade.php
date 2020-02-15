<!-- No Induk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_induk', 'Nama Siswa:') !!}
    {!! Form::select('no_induk', $bio_siswaItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Id Pelanggaran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_pelanggaran', 'Jenis Pelanggaran:') !!}
    {!! Form::select('id_pelanggaran', $pelanggaranItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Id Tindakan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_tindakan', 'Jenis Tindakan:') !!}
    {!! Form::select('id_tindakan', $tindakanItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Poin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poin', 'Poin:') !!}
    {!! Form::number('poin', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Pelanggaran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_pelanggaran', 'Tanggal Pelanggaran:') !!}
    {!! Form::date('tgl_pelanggaran', null, ['class' => 'form-control','id'=>'tgl_pelanggaran']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pelanggaranDetails.index') }}" class="btn btn-default">Cancel</a>
</div>
