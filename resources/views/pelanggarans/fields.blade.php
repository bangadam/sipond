<!-- Keterangan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Skor Field -->
<div class="form-group col-sm-12">
    {!! Form::label('skor', 'Skor:') !!}
    {!! Form::number('skor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pelanggarans.index') }}" class="btn btn-default">Cancel</a>
</div>
