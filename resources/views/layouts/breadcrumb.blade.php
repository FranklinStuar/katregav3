@isset($breadcrumb)
    <li class="breadcrumb-item"><a href="{{route('home')}}">Inicio</a></li>
    @yield('breadcrumb')
@else
    <li class="breadcrumb-item active">Inicio</li>
@endisset
