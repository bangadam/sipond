{!! Form::open(['route' => ['jenisPrestasis.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('jenisPrestasis.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('jenisPrestasis.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
