{!! Form::open(['route' => ['perizinans.destroy', $id_izin], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="#" class='btn btn-success btn-xs'>
        Konfirmasi
    </a>
    <a href="{{ route('perizinans.show', $id_izin) }}" class='btn btn-default btn-xs'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('perizinans.edit', $id_izin) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
