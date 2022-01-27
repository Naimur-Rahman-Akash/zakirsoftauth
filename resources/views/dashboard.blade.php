@include('partial.head')
        
    <body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
    
     
    
      <!-- Navbar -->
      @include('partial.nav')
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
     @include('partial.aside')
    
      <!-- Content Wrapper. Contains page content -->
     @include('partial.content')
      <!-- /.content-wrapper -->
      
    @include('partial.footer')
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('partial.script')
    <!-- jQuery -->
    
    </body>
  
