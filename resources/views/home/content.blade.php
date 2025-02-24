<style>
 .v{display: flex;
   justify-content:space-between;
   gap: 5px;
   position: relative;
   top: 10%;
   right: 20%;
   height: 100px;
} 
  
  .btn{
    background-color: lightblue;
    width: 70%;
  
    
  }
  .btn1{
    background-color: aqua;
    padding: 10px;
    text-align: center;
    width: 70%;
  }
  .btn2{
    background-color: violet;
    padding: 10px;
    text-align: center;
    width: 70%;
  }
  .box{
    position: relative;
    top: 10px;
    bottom: 10px;
    right: 5%;

  }
  .box img{
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    background-attachment: fixed;
    border-radius: 50%;

    
  }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ثانوية أم القرى</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
              <li class="breadcrumb-item active">مجلس المعلمين </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 v ">
            <div class="btn">
              <span class="text-center">عدد الأعضاء</span>
              <p>{{ $posts }}</p>

            </div>
            <div class="btn1">
            <span class="text-center">عدد الاجتماعات</span>
            <p>{{ $meets }}</p>
            </div>
            <div class="btn2">
            <span class="text-center">عدد القرارات</span>
            <p>{{ $qarar }}</p>
            </div>
            <div class="btn2">
            <span class="text-center">عدد صور الاجتماع</span>
            <p>{{ $pic }}</p>
            </div>
         
            
           
            </div>

            
           <div class="box">
            
             <img src="images/school.jpg" alt="">
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
  </div>