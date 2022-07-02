<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
      
      <li class="nav-item">
        <a href="/guru_kelas" class="nav-link {{request()->is('guru_kelas')?'active':''}}">
          <i class="nav-icon fas fa-book"></i> <p>Kelas</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/guru_absensi" class="nav-link {{request()->is('guru_absensi') ? 'active':''}}">
          <i class="nav-icon fas fa-book"></i> <p>Absensi</p>
        </a>
      </li>
    </li>
      
      <li class="nav-item">
        <a href="/guru_nilai" class="nav-link {{request()->is('guru_nilai') ? 'active':''}}">
          <i class="nav-icon fas fa-book"></i> <p>Nilai</p>
        </a>
      </li>
    </li>


    <li class="nav-item">
      <a>
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>s
      </a>
    </li>
    </ul>