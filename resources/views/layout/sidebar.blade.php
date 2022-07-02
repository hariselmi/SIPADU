<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/" class="nav-link {{request()->is('/')?'active':''}}">
              <i class="nav-icon fas fa-home"></i> <p>Dashboard</p></a>
          </li>
          {{-- <li class="nav-item">
            <a href="/sekolah" class="nav-link {{request()->is('sekolah') ? 'active':''}}">
              <i class="nav-icon fas fa-book"></i> <p>Sekolah</p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="/pesertadidik" class="nav-link {{request()->is('pesertadidik')?'active':''}}">
              <i class="nav-icon fas fa-book"></i> <p>Peserta Didik</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link {{request()->is('gtk')?'active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                GTK
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/guru" class="nav-link {{request()->is('guru')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Guru</p>
                  </a>
                </li>
                {{-- <li class="nav-item">
                  <a href="/gtk-admin" class="nav-link {{request()->is('gtk-admin')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Admin</p>
                  </a>
                </li> --}}
              </ul>
          </li>

          <li class="nav-item">
            <a href="/kelas" class="nav-link {{request()->is('kelas') ? 'active':''}}">
              <i class="nav-icon fas fa-book"></i> <p>Kelas</p>
            </a>
          </li>
        </li>

        {{-- <li class="nav-item">
          <a href="/mapel" class="nav-link {{request()->is('mapel') ? 'active':''}}">
            <i class="nav-icon fas fa-book"></i> <p>Data Mapel</p>
          </a>
        </li>
      </li> --}}
        {{-- <li class="nav-item">
          <a href="/coba" class="nav-link {{request()->is('coba') ? 'active':''}}">
            <i class="nav-icon fas fa-book"></i> <p>Coba</p>
          </a>
        </li>
      </li> --}}
      <li class="nav-item">
        <a href="/rapor" class="nav-link {{request()->is('rapor') ? 'active':''}}">
          <i class="nav-icon fas fa-book"></i> <p>Rapor</p>
        </a>
      </li>
    </li>

          <li class="nav-item">
            <a href="/pendaftaranonline" class="nav-link {{request()->is('pendaftaranonline') ? 'active':''}}">
              <i class="nav-icon fas fa-book"></i> <p>Pendaftaran Online</p>
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