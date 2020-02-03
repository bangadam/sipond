
<div class='btn-group'>
    <!-- konfirmasi -->
    {!! Form::open(['route' => ['perizinans.konfirmasi', $id_izin], 'method' => 'put']) !!}
    {!! Form::button('Konfirmasi', [
        'type' => 'submit',
        'class' => 'btn btn-success btn-xs',
        'onclick' => "return confirm('Apakah santri sudah kembali?')"
    ]) !!}
    {!! Form::close() !!}
    
    {!! Form::open(['route' => ['perizinans.destroy', $id_izin], 'method' => 'delete']) !!}
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
    {!! Form::close() !!}
</div>

