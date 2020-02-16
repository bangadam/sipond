<!-- No Induk Field -->
<div class="form-group col-sm-12">
    {!! Form::label('no_induk', 'Nama Siswa:') !!}
    {!! Form::select('no_induk', $bio_siswaItems, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Id Pelanggaran Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_pelanggaran', 'Jenis Pelanggaran:') !!}

    <select id="id_pelanggaran" name="id_pelanggaran" class="form-control">

            <option disabled selected>--- Pilih Jenis Pelanggaran ---</option>

        @foreach($pelanggaranMaster as $items)
            @if(isset($pelanggaranDetail))

                @if($items->id_pelanggaran == $pelanggaranDetail->pelanggaran->id_pelanggaran)

                    <option data-skor="{{ $items->skor }}" value="{{ $items->id_pelanggaran }}" selected>{{ $items->keterangan }}</option>

                @else

                    <option data-skor="{{ $items->skor }}" value="{{ $items->id_pelanggaran }}">{{ $items->keterangan }}</option>

                @endif

            @else

                <option data-skor="{{ $items->skor }}" value="{{ $items->id_pelanggaran }}">{{ $items->keterangan }}</option>

            @endif

        @endforeach

    </select>
</div>

<!-- Id Tindakan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('id_tindakan', 'Jenis Tindakan:') !!}
    {!! Form::select('id_tindakan', $tindakanItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Poin Field -->
<div class="form-group col-sm-12">
    {!! Form::label('poin', 'Poin:') !!}
    {!! Form::number('poin', null, ['class' => 'form-control', 'id' => 'poin']) !!}
</div>

<!-- Tgl Pelanggaran Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tgl_pelanggaran', 'Tanggal Pelanggaran:') !!}
    {!! Form::date('tgl_pelanggaran', null, ['class' => 'form-control','id'=>'tgl_pelanggaran']) !!}
</div>

@section('scripts')

    <script src="{{asset('admin/assets/js/pages/crud/forms/widgets/select2.js')}}" type="text/javascript">
    </script>
    <script>

        $('.select2').select2();

        $("#id_pelanggaran").change(function () {
            var poin = $(this).find(':selected').data('skor');

            $('#poin').val(poin);
        });

    </script>

@endsection


<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pelanggaranDetails.index') }}" class="btn btn-default">Cancel</a>
</div>
