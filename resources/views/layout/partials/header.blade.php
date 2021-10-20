<header>
    <h1>Coder free</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
                <?php
                dump(request()->routeIs('home'));
                ?>
            </li>
            
            {{-- @dump(request()->routeIs('home')) --}}
            <li><a a href="{{ route('cursos.index') }}"  class="{{request()->routeIs('cursos.index') ? 'active' : ''}}">Cursos</a>
                <?php
                dump(request()->routeIs('cursos.index'));
                ?>
            </li>
           
            <li><a a href="{{ route('nosotros') }}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}" >Nosotros</a>
                <?php
                dump(request()->routeIs('nosotros'));
                ?>
            </li>
            <li>
                <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos</a>
            </li>
        </ul>
    </nav>
</header>