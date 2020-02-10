<!-- Nama Tindakan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_tindakan', 'Nama Tindakan:') !!}
    {!! Form::text('nama_tindakan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tindakans.index') }}" class="btn btn-default">Cancel</a>
</div>
