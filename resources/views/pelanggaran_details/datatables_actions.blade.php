{!! Form::open(['route' => ['pelanggaran.destroy', $id_pelanggaran], 'method' => 'delete']) !!}
<div class='btn-group'>
{{--    <a href="{{ route('pelanggaran.show', $id_pelanggaran) }}" class='btn btn-default btn-xs'>--}}
{{--        <i class="la la-eye"></i>--}}
{{--    </a>--}}
    <a href="{{ route('pelanggaran.edit', $id_pelanggaran) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
