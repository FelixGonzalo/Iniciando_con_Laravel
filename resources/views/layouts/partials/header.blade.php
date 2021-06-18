<header>
  <h1>Felix Castro</h1>
  <nav>
    <ul>
      <li>
        <a
          href="{{route('home')}}"
          class="{{request()->routeIs('home') ? 'active' : ''}}"
        >Home</a>
      </li>
      <li>
        <a
          href="{{route('cursos.index')}}"
          class="{{request()->routeIs('cursos.*') ? 'active' : ''}}"
        >Cursos</a>
      </li>
      <li>
        <a
          href="{{route('nosotros')}}"
          class="{{request()->routeIs('nosotros') ? 'active' : ''}}"
        >Nosotros</a>
      </li>
      <li>
        <a
          href="{{route('contactanos.index')}}"
          class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}"
        >Contáctanos</a>
      </li>
    </ul>
  </nav>
</header>