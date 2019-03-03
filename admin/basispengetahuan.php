<?php session_start(); ?>
<?php include '../function/connection.php'; ?>
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
          	<h6 class="mb"><i class="fa fa-angle-right"></i> <a href="index.php"> Dashboard </a> / Data Basis Pengetahuan</h6>

            <!-- INPUT MESSAGES -->
            <div class="row mt">
              <div class="col-lg-4">
                <div class="form-panel">
                      <h5 class="mb"><i class="fa fa-angle-right"></i> Input Data Basis Pengetahuan</h5>
                          <form class="form-horizontal tasi-form" action="action/simpanbasispengetahuan.php" method="post">
                              <div class="form-group has-success">
                                  <div class="col-lg-12">
                                      Penyakit
                                      <select autofocus="" name="kdpenyakit" class="form-control">
                                        <option value=""></option>
                                        <?php $query = mysqli_query($connection, "SELECT * FROM tbl_penyakit"); ?>
                                        <?php while($tampil = mysqli_fetch_array($query)){ ?>
                                          <option value="<?php echo $tampil['kd_penyakit']; ?>"><?php echo $tampil['nm_penyakit']; ?></option>
                                        <?php } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                  <div class="col-lg-12">
                                      Gejala
                                      <select name="kdgejala" class="form-control">
                                        <option value=""></option>
                                        <?php $query = mysqli_query($connection, "SELECT * FROM tbl_gejala"); ?>
                                        <?php while($tampil = mysqli_fetch_array($query)){ ?>
                                          <option value="<?php echo $tampil['kd_gejala']; ?>"><?php echo $tampil['nama_gejala']; ?></option>
                                        <?php } ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                  <div class="col-lg-12">
                                      MB (Ukuran Kepercayaan)
                                      <input  type="text" autocomplete="off" name="mb" class="form-control" id="inputSuccess">
                                  </div>
                              </div>
                              <div class="form-group has-success">
                                  <div class="col-lg-12">
                                      MD (Ukuran Ketidakpercayaan)
                                      <input  type="text" autocomplete="off" name="md" class="form-control" id="inputSuccess">
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
              <div class="col-lg-8">
                <div class="form-panel">


                      <h5 class="mb"><i class="fa fa-angle-right"></i> Data Tabel Gejala</h5>
                      
                      <table id="cecep" class="table">
                        <thead>
                          <tr>
                            <th>NO</th>
                            <th>nama Penyakit</th>
                            <th>Nama Gejala</th>
                            <th>MB</th>
                            <th>MD</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>  

                        <tbody>
                          <?php $no = 1; ?>
                          <?php $query = mysqli_query($connection, "SELECT * FROM tbl_basispengetahuan INNER JOIN tbl_gejala ON tbl_basispengetahuan.kd_gejala = tbl_gejala.kd_gejala INNER JOIN tbl_penyakit ON tbl_basispengetahuan.kd_penyakit = tbl_penyakit.kd_penyakit"); ?>
                          <?php while($tampil = mysqli_fetch_array($query)){ ?>
                          <tr>
                            <td><?php echo $no++; ?> </td>
                            <td><?php echo $tampil['nm_penyakit']; ?></td>
                            <td><?php echo $tampil['nama_gejala']; ?></td>
                            <td><?php echo $tampil['nilaimb']; ?></td>
                            <td><?php echo $tampil['nilaimd']; ?></td>
                            <td>
                              <a href="action/hapusbasispengetahuan.php?id=<?php echo $tampil['id']; ?>"><button title="hapus data" class="btn btn-danger btn-xs">HAPUS</button></a>
                              <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $tampil['id']; ?>">EDIT</button>
                              <! -- MODALS -->
                                <!-- Modal -->
                                <div class="modal fade" id="myModal<?php echo $tampil['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">EDIT DATA GEJALA</h4>
                                      </div>

                                      <form action="action/editbasispengetahuan.php" method="post">
                                      <div class="modal-body">
                                        <h6 class="mb"><i class="fa fa-angle-right"></i> Edit data gejala </h6>

                                        <input type="hidden" name="id" value="<?php echo $tampil['id']; ?>">

                                          Nama Penyakit
                                          <select name="kdpenyakit" class="form-control">
                                            <option value="<?php echo $tampil['kd_penyakit']; ?>"><?php echo $tampil['nm_penyakit']; ?><font style="color: red;">**</font></option>
                                            <?php $query1 = mysqli_query($connection, "SELECT * FROM tbl_penyakit"); ?>
                                            <?php while($tampil1 = mysqli_fetch_array($query1)){ ?>
                                              <option value="<?php echo $tampil1['kd_penyakit']; ?>"><?php echo $tampil1['nm_penyakit']; ?></option>
                                            <?php } ?>
                                          </select>

                                          Nama Gejala
                                          <select name="kdgejala" class="form-control">
                                            <option value="<?php echo $tampil['kd_gejala']; ?>"><?php echo $tampil['nama_gejala']; ?> 
                                            <font style="color: red;">**</font></option>
                                            <?php $query2 = mysqli_query($connection, "SELECT * FROM tbl_gejala"); ?>
                                            <?php while($tampil2 = mysqli_fetch_array($query2)){ ?>
                                              <option value="<?php echo $tampil2['kd_gejala']; ?>"><?php echo $tampil2['nama_gejala']; ?></option>
                                            <?php } ?>
                                          </select>

                                          Nilai MB
                                          <input type="text" class="form-control" autocomplete="off" name="nilaimb" value="<?php echo $tampil['nilaimb']; ?>">


                                          Nilai MD
                                          <input type="text" class="form-control" name="nilaimd" autocomplete="off" value="<?php echo $tampil['nilaimd']; ?>">


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

                </div><!-- /form-panel -->
              </div><!-- /col-lg-12 -->
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
