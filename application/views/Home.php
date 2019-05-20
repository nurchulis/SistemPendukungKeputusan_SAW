<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "root";
$database   =   "spk_saw";
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
?>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi SPK Penjurusan Teknik Informatika</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="col-md-10">
	<h2>Sistem Pendukung Keputusan Minat Penjurusan Teknik Informatika</h2>
	</div>
	
	<div class="col-md-2">
		<a href="<?php echo base_url() ?>Login/Logout">
		<h3 style="float: right;">Logout</h3>
		</a>
	</div>
<form action="<?php echo base_url(). 'Action_user/insert_nilai'; ?>" method="post">
		<table class="table" style="margin:20px auto;">
			 <thead>
			<tr style="margin-bottom: 30px">
				<td><h2>Input Nilai Makul kamu: <?php echo $user=$this->session->userdata('nim'); ?></h2></td>
			</tr>
			</thead>
			  <tbody>
			<?php foreach ($tampil_makul as $tampil) { ?>
			
		 <div class="form-group">
			<tr>
				<td style="width: 300px"><h3><?php echo $tampil->nama_makul ?></h3></td>
				<input type="hidden"  name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<td><input type="text" style="width: 300px"  class="form-control"  name="nilai[]"></td>
				<td><input type="hidden" name="nim[]" value="<?php echo $user=$this->session->userdata('nim'); ?>"></td>
			</tr>
		</div>
			<?php } ?>
		</tbody>
			
			
		</table>

			<?php 
			$user=$this->session->userdata('nim');
			$this->db->like('nim', $user);
			$this->db->from('data_nilai_to_number');
			$hasil=$this->db->count_all_results(); 
			if($hasil>0){
			?>
<input type="submit" class="btn btn-success" value="Simpan Data" style="width: 100%; margin-bottom: 30px; font-size: 30px;" disabled>
	
			<?php }else { ?>
<input type="submit" class="btn btn-success" value="Simpan Data" style="width: 100%; margin-bottom: 30px; font-size: 30px;">
	

			<?php } ?>
	</form>

		<table class="table" style="width: '40%';">
			<tr >
				<?php foreach ($tampil_makul as $tampil) {
				?>
				<th><?php echo $tampil->nama_makul; ?></th>
				<?php } ?>
			</tr>
			<tr >
			<form action="<?php echo base_url(). 'Action_user/insert_to_nilai_to_number'; ?>" method="post">
			<?php foreach ($tampil_nilai as $tampil) { ?>
				<input type="hidden" name="nim[]" value="<?php echo $user=$this->session->userdata('nim'); ?>">
				<td><?php 
				if($tampil->nilai=='A'){
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"   type="text" name="nilai[]" value="<?php echo 1; ?>">
				<?php
				}else if($tampil->nilai=='A-'){
					?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"  type="text" name="nilai[]" value="<?php echo 0.9230769231; ?>">
				<?php
				}else if ($tampil->nilai=='A/B') {
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"  type="text" name="nilai[]" value="<?php 	echo 0.8461538462; ?>">
				<?php
				}else if ($tampil->nilai=='B+') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"  type="text" name="nilai[]" value="<?php 	echo 0.7692307692; ?>">
				<?php
				}else if ($tampil->nilai=='B') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"   type="text" name="nilai[]" value="<?php 	echo 0.6923076923; ?>">
				<?php
				}else if ($tampil->nilai=='B-') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"   type="text" name="nilai[]" value="<?php 	echo 0.6153846154; ?>">
				<?php
				}else if ($tampil->nilai=='B/C') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"   type="text" name="nilai[]" value="<?php 	echo 0.5384615385; ?>">
				<?php
				}else if ($tampil->nilai=='C+') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"   type="text" name="nilai[]" value="<?php 	echo 0.4615384615; ?>">
				<?php
				}else if ($tampil->nilai=='C') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input   class="form-control"   type="text" name="nilai[]" value="<?php 	echo 0.3846153846; ?>">
				<?php
				}else if ($tampil->nilai=='C-') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input   class="form-control"  type="text" name="nilai[]" value="<?php 	echo 0.3076923077; ?>">
				<?php
				}else if ($tampil->nilai=='C/D') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input   class="form-control"  type="text" name="nilai[]" value="<?php 	echo 0.2307692308; ?>">
				<?php
				}else if ($tampil->nilai=='D+') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"   type="text" name="nilai[]" value="<?php 	echo 0.1538461538; ?>">
				<?php
				}else if ($tampil->nilai=='D') {
					
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input  class="form-control"   type="text" name="nilai[]" value="<?php echo 0.07692307692; ?>">
				<?php
				}else if ($tampil->nilai=='E') {
					echo 0;
				?>
				<input type="hidden" name="id_makul[]" value="<?php echo $tampil->id_makul ?>">
				<input type="text" name="nilai[]" value="<?php 	echo 0; ?>">
				<?php
				}
				 ?></td>

				
		<?php } ?>
		<tr>
			<td colspan="8">

			<?php 
			$user=$this->session->userdata('nim');
			$this->db->like('nim', $user);
			$this->db->from('data_nilai_to_number');
			$hasil=$this->db->count_all_results(); 
			if($hasil>0){
			?>
				<center>
					<Row>
	<input type="submit" class="btn btn-warning" value="Anda sudah Melakukan Proses Silakan Reset" style="width: 65%; margin-bottom: 30px; font-size: 30px;"disabled/>
		
			<a href="<?php echo base_url(). 'Action_user/reset_nilai_to_number'; ?>">
		<input type="" class="btn btn-danger" value="Reset Data" style="width: 20%; margin-bottom: 30px; font-size: 30px;">
	</a>

			</Row>
			</center>

			<?php }else { ?>

				<center>
	<input type="submit" class="btn btn-warning" value="Proses Variabel Menjadi Angka Dan Cek Hasilnya" style="width: 100%; margin-bottom: 30px; font-size: 30px;" >
			</center>

			<?php } ?>

			</td>

		
			</tr>
				 </form>
			
			</tr>
		</table>
		<center>
		<br><br><br>
		<h2>Normalisasi</h2>
	<table class="table" style="width: 200px;">
			<tr >
				<?php foreach ($tampil_makul as $tampil) {
				?>
				<th><?php echo $tampil->nama_makul; ?></th>
				<?php } ?>
			</tr>
			
			<?php foreach ($tampil_nilai_number as $tampil) { ?>
				<td>	
				<?php 	
			$result = mysqli_query($koneksi, "SELECT * from data_nilai_to_number WHERE id_makul=".$tampil->id_makul." ORDER BY nilai DESC LIMIT 1");
			$row = mysqli_fetch_assoc($result);
				echo $hasil_r=$tampil->nilai/$row['nilai'];
				 ?></td>
			<?php }?>
	</table>
<br><br>
<h1>Perhitungan Perminat Penjurusan</h1>
	<h2>Sistem Cerdas</h2>
	<table class="table" style="width: 200px;">
			<tr>
				<?php foreach ($tampil_makul as $tampil) {
				?>
				<th><?php echo $tampil->nama_makul; ?></th>
				<?php } ?>
			</tr>
			
			<?php 
			$hasilku=0;
			foreach ($tampil_nilai_sistem_cerdas as $tampil) { ?>
				<td>	
				<?php 	
			$result = mysqli_query($koneksi, "SELECT * from kriteria_nilai WHERE id_makul=".$tampil->id_makul." AND nama_kriteria='Sistem Cerdas'");
			$row = mysqli_fetch_assoc($result);

				echo $hasil_r=$tampil->nilai*$row['bobot'];
				
			
				 ?></td>
				 <?php 
				 $hasilku=$tampil->nilai*$row['bobot']++;
				 ?>
			<?php }
			echo $hasilku;
			?>
	</table>

<h2>Sistem Informasi</h2>
	<table class="table" style="width: 200px;">
			<tr>
				<?php foreach ($tampil_makul as $tampil) {
				?>
				<th><?php echo $tampil->nama_makul; ?></th>
				<?php } ?>
			</tr>
			
			<?php 
			$hasilku_informasi=0;
			foreach ($tampil_nilai_sistem_cerdas as $tampil) { ?>
				<td>	
				<?php 	
			$result = mysqli_query($koneksi, "SELECT * from kriteria_nilai WHERE id_makul=".$tampil->id_makul." AND nama_kriteria='Sistem Informasi'");
			$row = mysqli_fetch_assoc($result);

				echo $hasil_r=$tampil->nilai*$row['bobot'];
				
			
				 ?></td>
				 <?php 
				 $hasilku_informasi=$tampil->nilai*$row['bobot']++;
				 ?>
			<?php }
			echo $hasilku_informasi;
			?>
	</table>

<h2>Sistem Jaringan</h2>
	<table class="table" style="width: 200px;">
			<tr>
				<?php foreach ($tampil_makul as $tampil) {
				?>
				<th><?php echo $tampil->nama_makul; ?></th>
				<?php } ?>
			</tr>
			
			<?php 
			$hasilku_jaringan=0;
			foreach ($tampil_nilai_sistem_cerdas as $tampil) { ?>
				<td>	
				<?php 	
			$result = mysqli_query($koneksi, "SELECT * from kriteria_nilai WHERE id_makul=".$tampil->id_makul." AND nama_kriteria='Jaringan'");
			$row = mysqli_fetch_assoc($result);

				echo $hasil_r=$tampil->nilai*$row['bobot'];
				
			
				 ?></td>
				 <?php 
				 $hasilku_jaringan=$tampil->nilai*$row['bobot']++;
				 ?>
			<?php }
			echo $hasilku_jaringan;
			?>
	</table>
</center>
<center>
<h2>Hasil Sistem Cerdas: <?php echo $hasilku ?></h2>

<h2>Hasil Sistem Informasi: <?php echo $hasilku_informasi ?></h2>

<h2>Hasil Sistem Jaringan: <?php echo $hasilku_jaringan ?></h2>

<h1>
<?php echo "Nilai Terbesar Adalah: ".(max($hasilku,$hasilku_informasi,$hasilku_jaringan)); ?>
</h1>
</center>
</div>

</body>
</html>