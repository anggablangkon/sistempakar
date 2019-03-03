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

    <title><?php echo $_SESSION['title'] ?></title>

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
            <div class="alert alert-success"><b>Hallo Admin</b>. Halaman ini digunakan untuk proses pengecekan diagnosa</div>

            <div class="col-sm-5">

            <h4>Lakukan Proses Diagnosa Sekarang Juga :</h4>
            <h6>Silahkan pilih gejala yang ada alami.</h6>

            </div>

            <div class="col-sm-6">
            <form action="hasilprosesdiagnosis.php" method="post">
            <div class="content-panel">
            <table class="table">
              <thead>
                <th><input type="checkbox"></th>
                <th>NO</th>
                <th>NAMA GEJALA</th>
              </thead>

              <tbody>
                  <?php include '../function/connection.php'; ?>
                  <?php $no =1 ; ?>
                  <?php $query = mysqli_query($connection, "SELECT * FROM tbl_gejala ORDER BY kd_gejala ASC"); ?>
                  <?php while($tampil = mysqli_fetch_array($query)){ ?>
                <tr>
                  <td><input type="checkbox" name="oke[]" value="<?php echo $tampil['0']; ?>"></td>
                  <td><?php echo $no++; ?> </td>
                  <td><?php echo $tampil['1']; ?></td>
                </tr>
                  <?php } ?>
              </tbody>
            </table>
            </div>
            <br/>
            <input type="submit" class="btn btn-primary" value="Proses Diagnosia" name="">
            <input type="reset" class="btn btn-warning" value="Reset" name="">
            </form>
            </div>
          </section>

          <section class="wrapper site-min-height">

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