<!-- No Induk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_induk', 'No Induk:') !!}
    {!! Form::text('no_induk', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Mulai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_mulai', 'Tgl Mulai:') !!}
    {!! Form::date('tgl_mulai', null, ['class' => 'form-control','id'=>'tgl_mulai']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tgl_mulai').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Tgl Selesai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_selesai', 'Tgl Selesai:') !!}
    {!! Form::date('tgl_selesai', null, ['class' => 'form-control','id'=>'tgl_selesai']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#tgl_selesai').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Keluhan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keluhan', 'Keluhan:') !!}
    {!! Form::text('keluhan', null, ['class' => 'form-control']) !!}
</div>

<!-- Obat Field -->
<div class="form-group col-sm-6">
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
