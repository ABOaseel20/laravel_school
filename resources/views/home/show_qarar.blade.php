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
          <h2 class="text-center alert alert-warning"> عرض قرارات مجلس المعلمين</h2>


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
            <a href="{{ route('home.qarar')}}" class="btn btn-primary">اضافة قرار </a>

            <div class="card">
           <div class="card-body">
           

              <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>عنوان القرار</th>
                        <th>تفاصيل القرار</th>
                        <th>حالة القرار</th>
                        <th>الاجراء</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($show as $show)
                    <tr>
                        <td>{{ $show->id}}</td>
                        <td>{{ $show->title }}</td>
                        <td>{{ $show->details }}</td>
                        <td>{{$show->status}}</td>
                        <td><a href="{{ url('approve', $show->id) }}" class="btn btn-danger">حالة القرار</a></td>
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

