@section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

@section('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}

    <script>
        $('#table-perizinan').on('click', '.btn-konfirmasi', function() {
            const id = $(this).data('id');
            $('#modalKonfirmasi').find('input[name=id_izin]').val(id)
        })
    </script>
@endsection