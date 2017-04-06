
    <div class="container">

        <nav class="navbar navbar-inverse">

            <ul class="nav navbar-nav">
                <li><a href="{{ URL::to('/accountant') }}">Accountant</a></li>
                <li><a href="{{ URL::to('/HR') }}">Human Resource Manager</a></li>
            </ul>
        </nav>
    </div>

@yield('admin')
