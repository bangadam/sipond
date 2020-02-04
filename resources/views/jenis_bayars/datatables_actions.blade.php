{!! Form::open(['route' => ['jenisBayars.destroy', $id_jenis], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('jenisBayars.show', $id_jenis) }}" class='btn btn-default btn-xs'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('jenisBayars.edit', $id_jenis) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
