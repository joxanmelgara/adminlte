<!-- segundo -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link"> 
      <img src="<?= PLANTILLA?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-center">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block mr-3">Joxan Melgara</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Categorías
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASE_URL?>categorias/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver Datos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL?>categorias/agregar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Datos</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Productos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASE_URL?>productos/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL?>productos/agregarp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Producto</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= BASE_URL?>usuarios/verus" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL?>usuarios/agregarus" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar usuarios</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-basket"></i>
              <p>
                Ventas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=BASE_URL?>ventas/vents" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=BASE_URL?>ventas/agregarv" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar ventas</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>