<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="ar" dir="rtl">
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
  th{text-align: center;}
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
          <h2 class="text-center alert alert-danger">أعضاء مجلس الشورى</h2>

          <a href="{{ route('home.admin') }}" class="btn btn-secondary">رجوع للقائمة</a>
          <a href="{{ route('home.add') }}" class="btn btn-danger">اضافة أعضاء</a>
          <a href="{{ url('delete_all') }}" class="btn btn-warning">حذف الكل</a>




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
            </div>
             <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>الوصف الوظيفي</th>
                        <th>العمل المكلف به</th>
                        <th>الموافقه</th>
                        <th>الاجراءات</th>

                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $datas )
                    
                    <tr>
                        <th>{{ $datas->id }}</th>
                        <th>{{ $datas->name }}</th>
                        <th>{{ $datas->role }}</th>
                        <th>{{ $datas->job }}</th>
                        <th><span style="color: red;">{{ $datas->status }}</span></th>
                        <th>
                            <a href="{{ url('delete', $datas->id) }}" onclick="confirm('هل أنت متأكد من الحذف؟')" class="fa fa-trash mx-2 text-danger" style="font-size: 20px;"></a>
                            <a href="{{ url('edit', $datas->id) }}" class="fa fa-edit mx-2 text-gray" style="font-size: 20px;"></a>
                            <a href="{{ url('agree', $datas->id) }}" class="fa fa-handshake mx-2 text-warning" style="font-size: 20px;"></a>
                            <a href="{{ url('disagree', $datas->id) }}" class="fa fa-hand-point-left  mx-2" style="font-size: 20px;"></a>



                    </th>
                    </tr>
                    @endforeach
                </tbody>
                
             </table>


           </div>
           </div>

          </div>
          <!-- /.col-md-6 -->
         
            </div>
            <div class="container mt-2 mb-2">
    <div class="row">
        <div class="col-md-6">
        {{$data->links('pagination::bootstrap-5')}}

        </div>
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

