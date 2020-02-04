{!! Form::open(['route' => ['prestasis.destroy', $id_prestasi], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('prestasis.show', $id_prestasi) }}" class='btn btn-default btn-xs'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('prestasis.edit', $id_prestasi) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
