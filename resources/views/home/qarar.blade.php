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
          <h2 class="text-center alert alert-warning">قرارات مجلس المعلمين</h2>


          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content bg-white">
      <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3>قرارات مجلس المعلمين</h3>
                <p style="background-color: aliceblue; word-spacing: 10px;">قرار مجلس المعلمين
مجلس المعلمين هو جهة استشارية وتنظيمية تُعنى بمناقشة القضايا التربوية والتعليمية واتخاذ القرارات التي تساهم في تحسين العملية التعليمية داخل المؤسسة. يتم اتخاذ القرارات في المجلس بناءً على دراسات وتوصيات تُطرح في الاجتماعات الدورية، وبمشاركة فاعلة من أعضاء الهيئة التدريسية والإدارية.
أهمية قرارات مجلس المعلمين
تحسين جودة التعليم: من خلال مناقشة استراتيجيات التدريس وتطوير المناهج الدراسية.
تعزيز بيئة التعلم: عبر وضع سياسات تساعد في توفير بيئة تعليمية محفزة للطلاب.
تحقيق التعاون بين المعلمين: من خلال تبادل الآراء والخبرات لتحسين أداء المعلمين وتطوير مهاراتهم.
متابعة أداء الطلاب: واتخاذ القرارات المناسبة لدعمهم أكاديميًا وسلوكيًا.
تنظيم الأنشطة المدرسية: وتحديد الأولويات في تنفيذ البرامج التربوية المختلفة.
آلية اتخاذ القرار
الاجتماع الدوري: يعقد المجلس اجتماعاته بشكل منتظم لمناقشة القضايا التعليمية.
طرح القضايا ومناقشتها: يتم استعراض المشكلات والاقتراحات من قبل المعلمين والإدارة.
التصويت أو التوافق: يتم اتخاذ القرارات إما عبر التصويت أو التوافق بين الأعضاء.
إعداد محضر الاجتماع: لتوثيق القرارات والإجراءات المتفق عليها.
متابعة التنفيذ: يقوم المجلس بمتابعة تنفيذ القرارات لضمان تحقيق الأهداف المرجوة.
أمثلة على قرارات مجلس المعلمين
تعديل جداول الحصص الدراسية لتحقيق مرونة أكبر للطلاب والمعلمين.
وضع خطط لدعم الطلاب المتعثرين أكاديميًا.
تبني استراتيجيات تدريس حديثة لتحسين مخرجات التعلم.
تنظيم ورش عمل تدريبية للمعلمين.
تحسين آليات التواصل بين المدرسة وأولياء الأمور.
يُعتبر مجلس المعلمين ركيزة أساسية في تطوير العملية التعليمية، حيث يسهم في خلق بيئة تعليمية متطورة تلبي احتياجات الطلاب والمعلمين على حد سواء.

</p>

            </div>
        </div>
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

           <form action="{{ url('store_qarar') }}" method="post">
            @csrf 
            <div>
                <label for="">قرار المجلس</label>
                <input type="text" name="title" class="form-control" required id="">
            </div>
            <div class="mt-2 mb-2">
                <label for="">تفاصيل  القرار</label>
                <textarea name="details" class="form-control" id=""></textarea>
            </div>
           
           
            <div>
            <input type="submit" class="btn btn-secondary mt-2 mb-2 form-control " style="font-weight: bold; font-size:20px; line-height:20px;" value="اضافة  قرار المجلس">
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

