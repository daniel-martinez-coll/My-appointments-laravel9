<li class="nav-item dropdown d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-white font-weight-bold px-0" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">             
      <i class="fa fa-user  me-sm-1"></i>
      <span class="d-sm-inline d-none"> {{ Auth::user()->name }}</span>
    </a>
    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton2">
      <li class="mb-2">
        <a class="dropdown-item border-radius-md" href="#">
          <i class="fa fa-user  me-sm-1"></i>
          <span>Mi perfil</span>
        </a>
      </li>
      <li class="mb-2">
        <a class="dropdown-item border-radius-md" href="#">
          <i class="fa fa-user  me-sm-1"></i>
          <span>Configuración</span>
        </a>
      </li>
      <li class="mb-2">
        <a class="dropdown-item border-radius-md" href="#">
          <i class="fa fa-user  me-sm-1"></i>
          <span>Mis Citas</span>
        </a>
      </li>
      <li class="mb-2">
        <a class="dropdown-item border-radius-md" href="#">
          <i class="fa fa-user  me-sm-1"></i>
          <span>Ayuda</span>
        </a>
      </li>
      <div class="dropdown-divider"></div>
      <li class="mb-2">           
        <a class="dropdown-item border-radius-md" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-user  me-sm-1"></i>                      
            <span>{{ __('Cerrar Sesión') }}</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>            
      </li>                
      
    </ul>
</li>