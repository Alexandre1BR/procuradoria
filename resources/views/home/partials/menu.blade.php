<!-- Authentication Links -->
@if (!subsystem_is(App\Support\Constants::SUBSYSTEM_UNDEFINED)) {
    @if (subsystem_is(App\Support\Constants::SUBSYSTEM_PROCESSOS)) {
    <li><a href="{{ route('home.index') }}">Processos</a></li>

        <li><a href="{{ route('agenda.index') }}">Agenda</a></li>
    @endif

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            Cadastros <span class="caret"></span>
        </a>

        <ul class="dropdown-menu">
            @if (subsystem_is(App\Support\Constants::SUBSYSTEM_PROCESSOS)) {
                <li><a href="{{ route('agenda.index') }}">Agenda</a></li>
            @endif

            <li><a href="{{ route('home.index') }}">
                @if (subsystem_is(App\Support\Constants::SUBSYSTEM_PROCESSOS)) {
                    Processos
                @else
                    Pareceres
                @endif
            </a></li>

            @if (subsystem_is(App\Support\Constants::SUBSYSTEM_PROCESSOS)) {
                <li><a href="{{ route('andamentos.index') }}">Andamentos</a></li>
                <li><a href="{{ route('tribunais.index') }}">Tribunais</a></li>
                <li><a href="{{ route('juizes.index') }}">Juizes</a></li>
                <li><a href="{{ route('acoes.index') }}">Ações</a></li>
                <li><a href="{{ route('revisions.index') }}">Revisões</a></li>
                <li><a href="{{ route('leis.index') }}">Leis</a></li>
            @endif

            <li><a href="{{ route('users.index') }}">Usuários</a></li>
        </ul>
    </li>
@endif

@guest
    <li><a href="{{ route('login') }}">Login</a></li>
    {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
@else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    >
                       Sair
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
@endguest
