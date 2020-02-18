@section('css')
    @include('layouts.datatables_css')
@endsection

<div class="table-responsive">
{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}
</div>

@section('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
    <script>
        $('#filter_pilihan').on('change', function () {
            const data = {jenis: $(this).val()};
            $('select[name=filter_jenis]').attr('disabled', false)
            $.get("{{route('pembayarans.getJenis')}}", data, function(response) {
                $.each(response, function(index, value) {
                    $('select[name=filter_jenis]').append($("<option>", {
                        value: index,
                        text: value,
                    }))
                })
            })
        })
    </script>
@endsection
