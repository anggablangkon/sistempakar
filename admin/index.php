<?php session_start(); ?>
<?php include 'function/sessionlogin.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Halaman Administrator</title>

    <?php include('function/css.php'); ?>
    

  </head>

  <body>

  <section id="container" >

      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b><?php echo 'SISTEM PAKAR'; ?></b></a>
            <!--logo end-->
            
          
        </header>
      <!--header end-->

      <?php include 'function/sidebar.php'; ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">

        <br/>
          <section class="wrapper site-min-height">
            <div class="alert alert-success"><b>Hallo Admin</b> Selamat Datang Di Aplikasi <?php echo $_SESSION['level']; ?>.</div>
          </section>

    <! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

  <!-- javascript -->
  <?php include 'function/js.php'; ?>
    

  </body>
</html>