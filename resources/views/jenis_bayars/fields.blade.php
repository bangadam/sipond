<!-- Jenis Bayar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_bayar', 'Jenis Bayar:') !!}
    {!! Form::text('jenis_bayar', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('jenisBayars.index') }}" class="btn btn-default">Cancel</a>
</div>
