<!-- Gn Kelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gn_kelas', 'Gn Kelas:') !!}
    {!! Form::text('gn_kelas', null, ['class' => 'form-control']) !!}
</div>

<!-- Nm Kelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nm_kelas', 'Nm Kelas:') !!}
    {!! Form::text('nm_kelas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('kelas.index') }}" class="btn btn-default">Cancel</a>
</div>
