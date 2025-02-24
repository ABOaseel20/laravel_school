<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    
   
    </ul>

    <!-- SEARCH FORM -->
  

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
     @guest
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class=""></i>دخول</a>
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class=""></i>تسجيل</a>
      </li>
      @endguest
      @auth
      <span class="border-4-2 pr-2">
        مرحبا بك , {{ Auth::user()->name }}
      </span>
      <form action="{{ route('logout') }}" method="post" >
        @csrf 
        <input type="submit" name="" value="خروج" id="" class="btn btn-success " style="width: 100px;">
      </form>
      @endauth
    </ul>
  </nav>