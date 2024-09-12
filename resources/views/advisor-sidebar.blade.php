<!-- Left side column. contains the logo and sidebar -->

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li id="dashboard">
            <a href="{{route('home')}}">
               <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           </a>
        </li>
        <li class="treeview">
              <a href="#">
                <i class="fa fa-pencil"></i> <span>LEAD</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{route('add-lead')}}"><i class="fa fa-circle"></i>Add LEAD</a></li>
                  <li><a href="{{route('view-lead')}}"><i class="fa fa-circle-o"></i>View LEAD</a></li>
              </ul>
           </li>
           <li class="treeview">
              <a href="#">
                <i class="fa fa-pencil"></i> <span>RENEWAL</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="{{route('add-renewal')}}"><i class="fa fa-circle"></i>Add RENEWAL</a></li>
                  <li><a href="{{route('view-renewal')}}"><i class="fa fa-circle-o"></i>View RENEWAL</a></li>
              </ul>
           </li>
           <li class="treeview">
          <a href="change-password.php"><i class="fa fa-unlock-alt"></i> Change Password</a>
       </li> 
          
          </ul>
    </section>
    <!-- /.sidebar -->
  </aside>