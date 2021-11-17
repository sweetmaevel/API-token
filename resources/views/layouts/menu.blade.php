<li class="nav-item">
    <a href="{{ route('customizedcakes.index') }}"
       class="nav-link {{ Request::is('customizedcakes*') ? 'active' : '' }}">
        <p>Customizedcakes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


