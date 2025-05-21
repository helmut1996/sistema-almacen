
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Ventas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('nueva-ventas') }}">
              <i class="bi bi-circle"></i><span>Vender Producto</span>
            </a>
          </li>
          <li>
            <a href="{{ route('detalles-venta') }}">
              <i class="bi bi-circle"></i><span>Consultar Ventas</span>
            </a>
          </li>

        </ul>
      </li><!-- End Ventas Nav -->

   

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('productos') }}">
          <i class="bi bi-box"></i>
          <span>Productos</span>
        </a>
      </li><!-- End Producto Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('clientes') }}">
          <i class="bi bi-person"></i>
          <span>Clientes</span>
        </a>
      </li><!-- End Clientes Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('categorias') }}">
          <i class="bi bi-list"></i>
          <span>Categorias</span>
        </a>
      </li><!-- End Categorias Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('usuarios') }}">
          <i class="ri ri-account-circle-fill"></i>
          <span>Usuarios</span>
        </a>
      </li><!-- End Usuarios Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->