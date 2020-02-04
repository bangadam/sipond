<!-- Id Prestasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_prestasi', 'Id Prestasi:') !!}
    {!! Form::text('id_prestasi', null, ['class' => 'form-control']) !!}
</div>

<!-- No Induk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_induk', 'No Induk:') !!}
    {!! Form::text('no_induk', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Prestasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_prestasi', 'Tgl Prestasi:') !!}
    {!! Form::date('tgl_prestasi', null, ['class' => 'form-control','id'=>'tgl_prestasi']) !!}
</div>

<!-- Jenis Prestasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_prestasi', 'Jenis Prestasi:') !!}
    {!! Form::text('jenis_prestasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('prestasis.index') }}" class="btn btn-default">Cancel</a>
</div>
