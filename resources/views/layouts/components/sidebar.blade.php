@php
    $menus = [
        (object)[
            "title" => "Item",
            "path" => "item",
            "icon" => "fas fa-tachometer-alt",
        ],
        (object)[
            "title" => "Customer",
            "path" => "customer",
            "icon" => "fas fa-tachometer-alt",
        ],
    ];
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            @foreach ($menus as $menu )
            <li class="nav-item">
                <a href="{{$menu->path[0] !== '/' ? '/'. $menu->path : $menu->path }}" class="nav-link {{ request()->path() === $menu->path ? 'active' : '' }}">
                    <i class="nav-icon {{$menu->icon}}"></i>
                    <p>
                    {{$menu->title}}
                    <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                </a>
            </li>
            @endforeach

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
