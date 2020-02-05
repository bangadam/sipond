{!! Form::open(['route' => ['jenisProdukBayars.destroy', $id_jenis_produk], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('jenisProdukBayars.show', $id_jenis_produk) }}" class='btn btn-default btn-xs'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('jenisProdukBayars.edit', $id_jenis_produk) }}" class='btn btn-default btn-xs'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash-o"></i>', [
    'type' => 'submit',
    'class' => 'btn btn-danger btn-xs',
    'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}