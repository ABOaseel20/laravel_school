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
          <h2 class="text-center alert alert-warning">تعديل معلومات مجلس الشورى</h2>


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
            @if (session()->has('message'))
            <div class="alert alert-primary">
                {{ session()->get('message') }}
            </div>
            
            @endif
            </div>
            <form action="{{ url('update',$data->id) }}" method="post">
                @csrf 
                <div>
                    <label for="">الاسم</label>
                    <input type="text" name="name" id="" class="form-control" value="{{ $data->name }}">
                </div>
                <div>
                    <label for="">الوصف الوظيفي</label>
                    <input type="text" name="role" id="" class="form-control" value="{{   $data->role }}">
                </div>
                <div>
                    <label for="">العمل المكلف به</label>
                    <input type="text" name="job" id="" class="form-control" value="{{ $data->job }}">
                </div>
                <div>
                    <input type="submit" name="" class="form-control mt-2 mb-2 btn btn-danger" value="تعديل المعلومات" id="">
                    <a href="{{ route('home.admin') }}" class="btn btn-warning form-control">رجوع</a>
                </div>
            </form>
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

