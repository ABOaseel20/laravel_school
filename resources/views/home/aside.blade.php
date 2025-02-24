<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> مجلس المعلمين</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/logo1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ثانوية أم القرى</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                الأهداف
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>أهداف مجلس المعلمين</p>
                </a>
              </li>
            
            
            </ul>
          </li>    
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                الأعضاء
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('home.add') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة أعضاء للمجلس</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('home.show') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض الأعضاء</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                الاجتماعات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('home.meet') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة اجتماع</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('home.show_meet') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض  الاجتماعات</p>
                </a>
              </li>
              
            </ul>
           
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                قرارات مجلس المعلمين
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('home.qarar')  }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة  قرار</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('home.show_qarar') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض  القرارارت</p>
                </a>
              </li>
              
            </ul>
           
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                صور الاجتماع
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('home.picture') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة صور اجتماع</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('home.show_pic') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>عرض صور الاجتماع</p>
                </a>
              </li>
             
              
            </ul>
           
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>