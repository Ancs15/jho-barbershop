<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="{{route('home')}}" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('jho_barber/assets/logo_real_jho.png')}}"
              alt="Jho Barbershop Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Search-->
        
        <!--end::Sidebar Search-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item menu-open">
                <a href="/dashboard" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : ''}}">
                  <i class="bi bi-houses-fill"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              
              <!--  PRODUTOS-->

              <li class="nav-header">PRODUTOS</li>
              
              <li class="nav-item">
                <a href="{{ route('admin.produto.index') }}" class="nav-link {{ request()->routeIs('admin.produto.index') ? 'active' : ''}}">
                  <i class="bi bi-box2-fill"></i>
                  <p>Produtos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin.categoria.index') }}" class="nav-link {{ request()->routeIs('admin.categoria.index') ? 'active' : ''}}">
                  <i class="bi bi-tags-fill"></i>
                  <p>Categorias</p>
                </a>
              </li>
            <!-- VENDAS -->

              <li class="nav-header">VENDAS</li>

              <li class="nav-item">
                <a href="{{route('admin.cliente.index')}}" class="nav-link {{ request()->routeIs('admin.cliente.index') ? 'active' : ''}}">
                  <i class="bi bi-person-fill"></i>
                  <p>Clientes</p>
                </a>
              </li>

              <li class="nav-item">
                  <a href="{{ route('admin.usuario.index') }}" class="nav-link {{ request()->routeIs('admin.usuario.index') ? 'active' : ''}}">
                    <i class="bi bi-person-fill"></i>
                    <p class="text">Usuários</p>
                  </a>
                </li>
              <!-- SITE -->

              <li class="nav-header">SITE</li>
              <li class="nav-item">
                <a href="{{ route('admin.banner.index') }}" class="nav-link {{ request()->routeIs('admin.banner.index') ? 'active' : ''}}">
                  <i class="bi bi-card-image"></i>
                  <p>Banners</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('admin.galeria.index')}}" class="nav-link {{ request()->routeIs('admin.galeria.index') ? 'active' : ''}}">
                  <i class="bi bi-camera-fill"></i>
                  <p>Galeria</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('admin.depoimento.index')}}" class="nav-link {{ request()->routeIs('admin.depoimento.index') ? 'active' : ''}}">
                  <i class="bi bi-chat-dots-fill"></i>
                  <p>Depoimentos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.mensagem.index')}}" class="nav-link {{ request()->routeIs('admin.mensagem.index') ? 'active' : ''}}">
                  <i class="bi bi-envelope-fill"></i>
                  <p>Mensagens</p>
                </a>
              </li>


               <li class="nav-item">
                <a href="{{route('admin.servicos.index')}}" class="nav-link {{ request()->routeIs('admin.servicos.index') ? 'active' : ''}}">
                  <i class="bi bi-gear-fill"></i>
                  <p>Serviços</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="{{route('admin.categoria_servicos.index')}}" class="nav-link {{ request()->routeIs('admin.categoria_servicos.index') ? 'active' : ''}}">
                  <i class="bi bi-list-nested"></i>
                  <p>Tipos de serviços</p>
                </a>
              </li>

            </ul>

            <div class="footer-line">
              <hr>
              <i class="bi bi-scissors"></i>
              <hr>
            </div>
          </div>
            <!--end::Sidebar Menu-->
          

       
      </aside>