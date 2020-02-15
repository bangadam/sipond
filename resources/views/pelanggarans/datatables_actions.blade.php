{!! Form::open(['route' => ['pelanggarans.destroy', $id_pelanggaran], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('pelanggarans.show', $id_pelanggaran) }}" class='btn btn-default btn-xs'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('pelanggarans.edit', $id_pelanggaran) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
