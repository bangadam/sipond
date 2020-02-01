{!! Form::open(['route' => ['kelas.destroy', $id_kelas], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('kelas.show', $id_kelas) }}" class='btn btn-default btn-xs'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('kelas.edit', $id_kelas) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
