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
    td, th{
        text-align: center;
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
          <h2 class="text-center alert alert-warning"> اضافة صور لمجلس المعلمين</h2>


          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content bg-white">
      <div class="container-fluid">
        @if(session()->has('message'))
        <div class="alert alert-warning">
            {{ session()->get('message') }}
        </div>
        @endif 
       
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('home.admin') }}" class="btn btn-secondary">رجوع للقائمة</a>

            <div class="card">
           <div class="card-body">

           <form action="{{ url('store_image') }}" method="post" enctype="multipart/form-data">
            @csrf 
            <div>
                <label for="">عنوان الصورة</label>
                <input type="text" name="title" class="form-control " required >
            </div>
            <div class="mb-2 mt-2"> 
                <input type="file" name="image" class="form-control" id="">
            </div>
            <div>
                <input type="submit" name="" class="form-control btn btn-danger mt-2 mb-2" value="اضافة صورة" id="">
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

