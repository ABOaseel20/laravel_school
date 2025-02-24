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
          <h2 class="text-center alert alert-warning">اضافة اجتماع  المجلس</h2>


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
            <a href="{{ route('home.admin') }}" class="btn btn-secondary">رجوع للقائمة</a>

            <div class="card">
           <div class="card-body">
            @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session()->get('message') }}
            </div>
            @endif 

           <form action="{{ url('store_meet') }}" method="post">
            @csrf 
            <div>
                <label for="">عنوان الاجتماع</label>
                <input type="text" name="title" class="form-control" required id="">
            </div>
            <div class="mt-2 mb-2">
                <label for="">تفاصيل الاجتماع</label>
                <textarea name="description" class="form-control" id=""></textarea>
            </div>
            <div>
                <label for="">اليوم</label>
                <input type="text" name="day" class="form-control" required>

            </div>
            <div>
                <label for="">التاريخ</label>
                <input type="date" name="date" class="form-control" id="">
            </div>
            <div>
            <input type="submit" class="btn btn-secondary mt-2 mb-2 form-control " style="font-weight: bold; font-size:20px; line-height:20px;" value="اضافة اجتماع جديد">
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

