<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="ar" dir="rtl">
<base href="/public">

@include('home.css')
<style>
    .card{
        padding: 10px;
        position: relative;
        top: 5%;
    }
    h2{
        margin-top: 20%;
    }
    .content{
        position: relative;
        left: 15%;
    }
  
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-white">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h2 class="text-center alert alert-warning">تسجيل  بالموقع</h2>


          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content bg-white">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <div class="card">
           <div class="card-body">
            <form action="{{ url('show_register') }}" method="post">
                @csrf
                <div>
                <label for="">اسم المستخدم</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required id="">
                </div>
                <div>
                    <label for="">الايميل</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div>
                    <label for="password">الرقم السري</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div>
                    <label for="password_confirmation"> تأكيد الرقم السري</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>
               
                <div>
                    <input type="submit" class="btn btn-danger form-control mt-3 mb-3" value="دخول" >

                    @if($errors->any())
                    <ul class="px-4 py-2 bg-red-100">
                        @foreach($errors->all() as $error)
                        <li class="my-2 text-red-500">
                            {{ $error }}
                        </li>
                        @endforeach 
                    @endif
                    </ul>
                </div>
             
            </form>
          
           
            </div>
           
           </div>
           </div>

          </div>
          <!-- /.col-md-6 -->
         
            </div>

           
          </div>
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>  <!-- /.control-sidebar -->
<br><br>
  <!-- Main Footer -->
 @include('home.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
</body>
</html>

