@section('css')
    @include('layouts.datatables_css')
@endsection

<div class="table-responsive">
{{-- {!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!} --}}
    <table class="table table-striped table-bordered" id="table-perizinan">
        <thead>
            <th>Nama lengkap</th>
            <th>Tanggal Izin</th>
            <th>Tanggal Kembali</th>
            <th>Tanggal Konfirmasi</th>
            <th>Penjemput</th>
            <th>Catatan</th>
            <th>Status Izin</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($perizinan as $item)
                <tr>
                <td>{{$item['bio_siswa']['nama_lengkap']}}</td>
                <td>{{date('d-m-Y', strtotime($item['tgl_izin']))}}</td>
                <td>{{date('d-m-Y', strtotime($item['tgl_kembali']))}}</td>
                <td>{{($item['perizinan_kembali'] != null ? date('d-m-Y', strtotime($item['perizinan_kembali']['updated_at'])) : '-')}}</td>
                <td>{{$item['penjemput']}}</td>
                <td>{{$item['catatan']}}</td>
                <td>{{$item['status_izin']}}</td>
                <td>
                    <div class='btn-group'>
                        <!-- konfirmasi -->
                        {!! Form::open(['route' => ['perizinans.destroy', $item['id_izin']], 'method' => 'delete']) !!}
                        @if ($item['status_izin'] == "Belum Kembali")
                        <a href="#!" data-toggle="modal" data-target="#modalKonfirmasi" class='btn btn-success btn-xs btn-konfirmasi' data-id="{{$item['id_izin']}}">
                            konfirmasi
                        </a>
                        @else
                        <a href="{{route('perizinans.konfirmasiBatal', $item['id_izin'])}}" class='btn btn-warning btn-xs' data-id="{{$item['id_izin']}}">
                            Batal konfirmasi
                        </a>
                        @endif
                    
                        {{-- <a href="{{ route('perizinans.show', $id_izin) }}" class='btn btn-default btn-xs'>
                        <i class="la la-eye"></i>
                        </a> --}}
                    
                        <a href="{{ route('perizinans.edit', $item['id_izin']) }}" class='btn btn-default btn-xs'>
                            <i class="la la-edit"></i>
                        </a>
                        {!! Form::button('<i class="la la-trash-o"></i>', [
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'onclick' => "return confirm('Are you sure?')"
                        ]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@section('scripts')
    @include('layouts.datatables_js')
    {{-- {!! $dataTable->scripts() !!} --}}


    <script>
        $('#table-perizinan').DataTable();
        $('#table-perizinan').on('click', '.btn-konfirmasi', function() {
            const id = $(this).data('id');
            $('#modalKonfirmasi').find('input[name=id_izin]').val(id)
        })
    </script>
@endsection