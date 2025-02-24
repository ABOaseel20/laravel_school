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
          <h2 class="text-center alert alert-primary"> عرض صور قرارات المجلس</h2>


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
            <a href="{{ url('delete_all') }}" class="btn btn-warning">حذف الكل</a>
            <a href="{{ route('home.picture') }}" class="btn btn-warning">اضافة جديد</a>


            <div class="card">
           <div class="card-body">

            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>عنوان الصورة</th>
                        <th>صور الاجتماع</th>
                        <th>الاجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pic as $pic)
                    <tr>
                        <td>{{ $pic->id }}</td>
                        <td>{{ $pic->title }}</td>
                        <td><img src="images/{{ $pic->image }}" width="50" height="50" alt=""></td>
                        <td><a href="{{ url('delete', $pic->id) }}" class="fa fa-trash text-danger" style="font-size: 25px;"></a></td>
                    </tr>
                    @endforeach
                </tbody>
              
            </table>
           

            
           
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

