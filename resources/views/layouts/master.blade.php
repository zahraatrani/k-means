<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Clustering K-Means </title>

  <!-- Bootstrap -->
  <link href="../admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../admin/vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- iCheck -->
  <link href="../admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->

  <!-- NProgress -->
  <link href="../admin/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Dropzone.js -->
  <link href="../admin/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="../admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../admin/build/css/custom.min.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="../admin/vendors/jquery/dist/jquery.min.js"></script>
  <style type="text/css">
    .fp_tree ul {
      margin-left: 0px
    }

    .fp_tree li {
      list-style-type: none;
      margin: 5px;
      position: relative
    }

    .fp_tree li::before {
      content: "";
      position: absolute;
      top: -5px;
      left: -20px;
      border-left: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      border-radius: 0 0 0 0;
      width: 20px;
      height: 14px
    }

    .fp_tree li::after {
      position: absolute;
      content: "";
      top: 8px;
      left: -20px;
      border-left: 1px solid #ccc;
      border-top: 1px solid #ccc;
      border-radius: 0 0 0 0;
      width: 20px;
      height: 100%
    }

    .fp_tree li:last-child::after {
      display: none
    }

    .fp_tree li:last-child:before {
      border-radius: 0 0 0 5px
    }

    ul.fp_tree>li:first-child::before {
      display: none
    }

    .fp_tree b {
      min-width: 50px;
    }
  </style>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Clustering</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Selamat Datang</span>
              <h2>Admin</h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu Admin -->
          @if(auth()->user()->role=='admin')
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="/home"><i class="fa fa-home"></i> Home</a>

                </li>
                <li>
                  <a><i class="fa fa-list"></i> K-Means <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                   <li><a href="/k_alternatif">Data Barang</a></li>
                    <li><a href="/k_penjualan">Data Penjualan</a></li>
                    <li><a href="/k_rel_alternatif">Data Clustering</a></li>
                    <li><a href="/k_means">K Means</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="/k_laporan">Laporan</a></li>
                  </ul>
                </li>
                
               
              </ul>
            </div>
          </div>
          @endif
          <!-- /sidebar menu -->

          <!-- sidebar menu Pelanggan -->
          @if(auth()->user()->role=='owner')
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="/home"><i class="fa fa-home"></i> Home</span></a>
                </li>
               <li><a href="/k_laporan"><i class="fa fa-file-code-o"></i>Laporan</a></li>
              </ul>
            </div>
          </div>
          @endif
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset('images/img.jpg')}}" alt="">Admin
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                
                  

                  <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out pull-right"></i> Keluar</a>
                </div>
              </li>


            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12  ">
              <div class="x_content">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
      
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>


<!-- Bootstrap -->
<script src="../admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../admin/vendors/nprogress/nprogress.js"></script>
<!-- Smart Wizard -->
<script src="../admin/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
<!-- Custom Theme Scripts -->
<script src="../admin/build/js/custom.min.js"></script>
<!-- Datatables -->
<script src="../admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../admin/vendors/jszip/dist/jszip.min.js"></script>
<script src="../admin/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../admin/vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- CKEDITOR Online -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<!-- Sweet Alert Online -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Dropzone -->
<script src="../admin/vendors/dropzone/dist/min/dropzone.min.js"></script>
<script src="../admin/vendors/nprogress/nprogress.js"></script>
<script>
  var konten = document.getElementById("deskripsi");
  CKEDITOR.replace(deskripsi, {
    language: 'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>

<script>
  $(function() {
    $("#saldoMasuk").DataTable({
      "responsive": true,
      "autoWidth": true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
      "language": {
        "url": '../admin/vendors/ID.json'
      }
    });

    $("#saldoKeluar").DataTable({
      "responsive": true,
      "autoWidth": true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
      "language": {
        "url": '../admin/vendors/ID.json'
      }
    });

    $("#riwayatSaldo").DataTable({
      "responsive": true,
      "autoWidth": true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
      "language": {
        "url": '../admin/vendors/ID.json'
      }
    });
  });

  $(function() {
    $("#daftarproduk").DataTable({
      "responsive": true,
      "autoWidth": true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });

    // url=pesanan.pelanggan_historipesanan
    $(function() {
      $("#historipelanggan").DataTable({
        "responsive": true,
        "autoWidth": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });

    $(function() {
      $("#pesanan_terkonfirmasi1").DataTable({
        "responsive": true,
        "autoWidth": true,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
</body>

</html>