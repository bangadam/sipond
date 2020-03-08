<div class='btn-group'>
    <!-- konfirmasi -->
    {!! Form::open(['route' => ['perizinans.destroy', $id_izin], 'method' => 'delete']) !!}
    @if ($status_izin == "Belum Kembali")
    <a href="#!" data-toggle="modal" data-target="#modalKonfirmasi" class='btn btn-success btn-xs btn-konfirmasi' data-id="{{$id_izin}}">
        konfirmasi
    </a>
    @else
    <a href="{{route('perizinans.konfirmasiBatal', $id_izin)}}" class='btn btn-warning btn-xs' data-id="{{$id_izin}}">
        Batal konfirmasi
    </a>
    @endif

    {{-- <a href="{{ route('perizinans.show', $id_izin) }}" class='btn btn-default btn-xs'>
    <i class="la la-eye"></i>
    </a> --}}

    <a href="{{ route('perizinans.edit', $id_izin) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
    'type' => 'submit',
    'class' => 'btn btn-danger btn-xs',
    'onclick' => "return confirm('Are you sure?')"
    ]) !!}
    {!! Form::close() !!}
</div>