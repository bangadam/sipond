@section('css')
    @include('layouts.datatables_css')
@endsection

<div class="table-responsive">
{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}
</div>
@section('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
    
    <script src="{{asset('admin/assets/js/pages/crud/forms/widgets/select2.js')}}" type="text/javascript">
    </script>
    <script>
        $('.select2').select2();
    </script>

@endsection