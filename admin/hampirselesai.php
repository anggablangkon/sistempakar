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
            <div class="alert alert-success"><b>Hallo</b> ini adalah hasil diagnosis penyakit yang telah diproses.</div>
          
            <h4>Hasil Diagnosa</h4><br/>
            <h6>Gejala - gejala yang anda pilih :</h6><br/>
            <div class="col-sm-7">
            <table class="table">
            	<thead>
            		<th>No</th>
            		<th>Kode Gejala</th>
            		<th>Nama Gejala</th>
            	</thead>

            	<tbody>
                    <?php include '../function/connection.php'; ?>
            		<?php $no = 1; ?>
            		<?php $kdgejala = $_POST['oke']; ?>
            		<?php foreach ($kdgejala as $tampil) { ?>
            		<tr>
            			<td><?php echo $no++; ?></td>
            			<td><?php echo $tampil; ?></td>
            			<?php $query = mysqli_query($connection, "SELECT * FROM tbl_gejala WHERE kd_gejala = '$tampil'"); ?>
                  		<?php while($tampil1 = mysqli_fetch_array($query)){ ?>
            			<td><?php echo $tampil1['nama_gejala']; ?></td>
            			<?php } ?>
            		</tr>
            		<?php } ?>
            	</tbody>
            </table>
            </div>

            <br/>
            <div class="col-sm-7">
            	<h6>Data Analisa :</h6><br/>
            	<table class="table">
            		<thead>
            			<th>No</th>
            			<!-- <th>Kode</th> -->
            			<th>Nama Penyakit</th>
            			<th>CF</th>
            			<th>Rank</th>
            		</thead>

            		<tbody>
                  <?php $no = 1; ?>
            			<?php $peringkat = 1; ?>
            			<?php $kdgejala = $_POST['oke']; ?>
            			<?php foreach ($kdgejala as $tampil) { ?>
            			<?php $query = mysqli_query($connection, "SELECT sum(tbl_basispengetahuan.nilaimb)  FROM tbl_basispengetahuan WHERE kd_gejala = '$tampil' GROUP BY kd_penyakit ORDER BY nilaimb ASC "); ?>
                  		<?php while($tampil1 = mysqli_fetch_array($query)){ ?>
            			<tr>
            				<td><?php echo $no++; ?></td>
            				<!-- <td>1001</td> -->
            				<?php $query2 = mysqli_query($connection, "SELECT sum(tbl_basispengetahuan.nilaimb) FROM tbl_penyakit LEFT JOIN tbl_basispengetahuan ON tbl_penyakit.kd_penyakit = tbl_basispengetahuan.kd_penyakit WHERE tbl_penyakit.kd_penyakit = '$tampil1[1]' GROUP BY tbl_penyakit.nm_penyakit ORDER BY tbl_basispengetahuan.nilaimb ASC "); ?>
                  			<?php while($tampil2 = mysqli_fetch_array($query2)){ ?>
            				<td><?php echo $tampil2['nm_penyakit']; ?></td>
            				<td><?php echo $tampil1['nilaimb']; ?></td>
            				<?php } ?>
            				<td><?php echo $peringkat++; ?></td>
            			</tr>
            			<?php } ?>
            			<?php } ?>
            		</tbody>
            	</table>
        	</div>

          </section>

    <! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

     
  </section>

  <!-- javascript -->
  <?php include 'function/js.php'; ?>
    

  </body>
</html>