<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index') }}" class="brand-link">
        <span class="brand-text font-weight-light pl-2">ADM Betim</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Usuário</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-table-columns"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('administrative-codes.index') }}" class="nav-link">
                      <i class="nav-icon fa-solid fa-list-check"></i>
                      <p>
                          Códigos Administrativos
                      </p>
                  </a>
              </li>
            </ul>
        </nav>
    </div>
</aside>
