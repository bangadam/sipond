

<li class="{{ Request::is('kelas*') ? 'active' : '' }}">
    <a href="{{ route('kelas.index') }}"><i class="fa fa-edit"></i><span>Kelas</span></a>
</li>

<li class="{{ Request::is('perizinans*') ? 'active' : '' }}">
    <a href="{{ route('perizinans.index') }}"><i class="fa fa-edit"></i><span>Perizinans</span></a>
</li>

