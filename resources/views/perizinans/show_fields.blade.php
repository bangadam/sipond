<!-- No Induk Field -->
<div class="form-group">
    {!! Form::label('no_induk', 'No Induk:') !!}
    <p>{{ $perizinan->no_induk }}</p>
</div>

<!-- Tgl Izin Field -->
<div class="form-group">
    {!! Form::label('tgl_izin', 'Tgl Izin:') !!}
    <p>{{ $perizinan->tgl_izin }}</p>
</div>

<!-- Tgl Kembali Field -->
<div class="form-group">
    {!! Form::label('tgl_kembali', 'Tgl Kembali:') !!}
    <p>{{ $perizinan->tgl_kembali }}</p>
</div>

<!-- Penjemput Field -->
<div class="form-group">
    {!! Form::label('penjemput', 'Penjemput:') !!}
    <p>{{ $perizinan->penjemput }}</p>
</div>

<!-- Catatan Field -->
<div class="form-group">
    {!! Form::label('catatan', 'Catatan:') !!}
    <p>{{ $perizinan->catatan }}</p>
</div>

<!-- Status Izin Field -->
<div class="form-group">
    {!! Form::label('status_izin', 'Status Izin:') !!}
    <p>{{ $perizinan->status_izin }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $perizinan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $perizinan->updated_at }}</p>
</div>

