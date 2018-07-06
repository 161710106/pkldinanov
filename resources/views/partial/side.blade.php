
  
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/avatar2.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
      Dina Novinti
</div>
      </div
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              
              <p>
                Menu
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

          
          <li class="nav-item">
            <a href="{{ route('paket.index')}}" class="nav-link">

              <p>
                Paket Umroh
                <span class="badge badge-info right"></span>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{ route('jadwal.index')}}" class="nav-link">

              <p>
                Jadwal Pemberangkatan
                <span class="badge badge-info right"></span>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{ route('berita.index')}}" class="nav-link">

              <p>
                Berita
                <span class="badge badge-info right"></span>
              </p>
            </a>

          </li>


          <li class="nav-item">

            <a href="{{ route('syarat.index')}}" class="nav-link">

              <p>
                Syarat dan Ketentuan
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('fasilitas.index')}}" class="nav-link">

              <p>
                Fasilitas
                <span class="badge badge-info right"></span>
              </p>
            </a>

          </li>

         <li class="nav-item">
          
            <a href="{{ route('pembina.index')}}" class="nav-link">

              <p>
                Pembina
                <span class="badge badge-info right"></span>
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{ route('artikel.index')}}" class="nav-link">

              <p>
                artikel
                <span class="badge badge-info right"></span>
              </p>
            </a>

          </li>
          <li class="nav-item">
          
          <a href="pages/calendar.html" class="nav-link">

            <p>
            Galery
              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>

         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
