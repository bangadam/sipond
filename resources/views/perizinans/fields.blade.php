<!-- No Induk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_induk', 'No Induk:') !!}
    {!! Form::text('no_induk', null, ['class' => 'form-control']) !!}
</div>

<!-- Tgl Izin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_izin', 'Tgl Izin:') !!}
    {!! Form::date('tgl_izin', null, ['class' => 'form-control','id'=>'tgl_izin']) !!}
</div>

<!-- Tgl Kembali Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tgl_kembali', 'Tgl Kembali:') !!}
    {!! Form::date('tgl_kembali', null, ['class' => 'form-control','id'=>'tgl_kembali']) !!}
</div>

<!-- Penjemput Field -->
<div class="form-group col-sm-6">
    {!! Form::label('penjemput', 'Penjemput:') !!}
    {!! Form::text('penjemput', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::textarea('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Izin Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('status_izin', "Belum Kembali", ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('perizinans.index') }}" class="btn btn-default">Cancel</a>
</div>
