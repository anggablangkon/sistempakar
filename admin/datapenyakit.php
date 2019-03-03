<?php session_start(); ?>
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
          	<h6 class="mb"><i class="fa fa-angle-right"></i> <a href="index.php"> Dashboard </a> / Data Penyakit</h6>

            <!-- INPUT MESSAGES -->
            <div class="row mt">
              <div class="col-lg-10">
                <div class="form-panel">
                      <h5 class="mb"><i class="fa fa-angle-right"></i> Input Data Penyakit</h5>
                          <form class="form-horizontal tasi-form" action="action/simpanpenyakit.php" method="post">
                              <div class="form-group has-success">
                                  <div class="col-lg-6">
                                      Kode Penyakit
                                      <input autofocus="off" name="kdpenyakit" type="text" autocomplete="off" autofocus="" name="kdgejala" class="form-control" id="inputSuccess">
                                  </div>
                                  <div class="col-lg-6">
                                      Nama Penyakit
                                      <input  type="text" name="nmpenyakit" autocomplete="off" name="nmgejala" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                 <div class="col-lg-6">
                                      Definisi Penyakit
                                      <textarea name="dfpenyakit" class="form-control" name="definisi"></textarea>
                                  </div>
                                  <div class="col-lg-6">
                                      Solusi Penyakit
                                      <textarea name="slpenyakit" class="form-control" name="definisi"></textarea>
                                  </div>
                              </div>

                              <div class="form-group has-success">
                                  <div class="col-lg-12">
                                      <button class="btn btn-primary ">SIMPAN</button>
                                      <button class="btn btn-warning ">RESET</button>
                                  </div>
                              </div>
                              
                          </form>
                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
              
              <div class="col-lg-12">
                <div class="form-panel">
                      <h5 class="mb"><i class="fa fa-angle-right"></i> Tabel Data Penyakit</h5>

                      <table id="cecep" class="table">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>Kode Penyakit</th>
                            <th>Nama Penyakit</th>
                            <th>Definisi</th>
                            <th>Solusi</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>  

                        <tbody>
                          <?php include '../function/connection.php'; ?>
                          <?php $no = 1; ?>
                          <?php $query = mysqli_query($connection, "SELECT * FROM tbl_penyakit ORDER BY kd_penyakit ASC"); ?>
                          <?php while($tampil = mysqli_fetch_array($query)){ ?>
                          <tr>
                            <td><?php echo $no++; ?> </td>
                            <td><?php echo $tampil['kd_penyakit']; ?></td>
                            <td><?php echo $tampil['nm_penyakit']; ?></td>
                            <td><?php echo $tampil['definisi']; ?></td>
                            <td><?php echo $tampil['solusi']; ?></td>
                            <td>
                              <a href="action/hapuspenyakit.php?kdpenyakit=<?php echo $tampil['kd_penyakit']; ?>"><button title="hapus data" class="btn btn-danger btn-xs">HAPUS</button></a>
                              <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $tampil['kd_penyakit']; ?>">EDIT</button>
                              <! -- MODALS -->
                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $tampil['kd_penyakit']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">EDIT DATA GEJALA</h4>
                                      </div>

                                      <form action="action/editpenyakit.php" method="post">
                                      <div class="modal-body">
                                        <h6 class="mb"><i class="fa fa-angle-right"></i> Edit data gejala </h6>

                                          Kode Gejala
                                          <input  type="text" autocomplete="off" disabled class="form-control" id="inputSuccess" value="<?php echo $tampil['kd_penyakit']; ?>" >
                                          <input type="hidden" name="kdpenyakit" value="<?php echo $tampil['kd_penyakit']; ?>">
                                          <br/>

                                          Nama Gejala
                                          <input  type="text" autocomplete="off" autofocus="" name="nmpenyakit" class="form-control" id="inputSuccess" value="<?php echo $tampil['nm_penyakit']; ?>">


                                      </div>
                                      <div class="modal-footer">
                                        <input type="submit" value="SIMPAN PEMBARUAN" name="simpan" class="btn btn-primary">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                      </form>


                                    </div>
                                  </div>
                                </div>   
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>

                </div>
              </div>

            </div><!-- /row -->

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
