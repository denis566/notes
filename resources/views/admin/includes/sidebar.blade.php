<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
     
  
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
         
        
         
        <li class="nav-item">
          <a href="{{ route('admin.note.index') }}" class="nav-link">
            <i class="nav-icon fa fa-sticky-note" aria-hidden="true"></i>
            <p>Записи</p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>Категории</p>
            </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.tag.index') }}" class="nav-link">
            <i class="nav-icon fa fa-tags" aria-hidden="true"></i>
            <p>Теги</p>
          </a>
        </li>
         
          
          
          
        
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
     
    </div>
    <!-- /.sidebar -->
  </aside>