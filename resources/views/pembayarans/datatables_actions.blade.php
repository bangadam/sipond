{!! Form::open(['route' => ['pembayarans.destroy', $no_nota], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('pembayarans.show', $no_nota) }}" class='btn btn-default btn-xs'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('pembayarans.edit', $no_nota) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
