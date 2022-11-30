<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">Online Product</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
       
        <li class="treeview"><a class="app-menu__item {{Request::is('admin/admin') ? 'active':''}}" href="{{url('admin/admin')}}" 
        data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Admin</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item {{Request::is('admin/all-user') ? 'active':''}}" href="{{url('admin/all-user')}}">
          <i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">All User</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

        <li class="treeview">
          <a class="app-menu__item {{Request::is('admin/all-product') ? 'active':''}}" href="{{url('admin/all-product')}}" data-toggle="treeview"><i class="app-menu__icon fas fa-ad"></i><span class="app-menu__label">All product</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>
        <li class="treeview">
          <a class="app-menu__item {{Request::is('admin/all-report') ? 'active':''}}" href="{{url('admin/all-report')}}" data-toggle="treeview"><i class="app-menu__icon fa fa-plus"></i><span class="app-menu__label">All report</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>
        <li class="treeview"><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>


      </ul>
    </aside>