<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cek Rute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- MDB -->
	<link rel="stylesheet" href="<?=base_url()?>css/mdb.min.css" />
	<!-- Custom styles -->
	<link rel="stylesheet" href="<?=base_url()?>css/admin.css" />
	
	<style>
	.nunito{
	  font-family: 'Nunito', sans-serif;
	}
	
	body {
	  font-family: 'Open Sans', sans-serif;
	  
    background: rgb(22,58,118);
		background: linear-gradient(#ebf1ff, #ffffff);
		/* Fallback for older browsers */
		background: -webkit-linear-gradient(#ebf1ff, #ffffff);
		background: -moz-linear-gradient(#ebf1ff, #ffffff);
		background: -o-linear-gradient(#ebf1ff, #ffffff);	
	}
	</style>

  </head>


  <body>
    <!-- Navbar -->
    <?php $this->load->view('component/navbar_pelanggan.php');?>	

  <div class="container mt-3">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Cek Rute</h2>
  </div>

  <div class="card">
			  <div class="card-header py-3">
				<h5 class="mb-0"><strong>Perhitungan Rute Terpendek Menggunakan Algoritma Djaksara</strong></h5>
			  </div>
			  <div class="card-body">
				<form action="<?=site_url('/pelanggan/rute_go')?>" method="post">
					<div class="form-group mb-2">
						<label for="nama">Tujuan Awal:</label>
						<select name="tujuan_awal" class="form-select" aria-label="Default select example">
						  <option value="Terminal Bekasi">Terminal Bekasi</option>
						  <option value="Duta Harapan">Duta Harapan</option>
						  <option value="Kuliner Alun Alun">Kuliner Alun Alun</option>
						  <option value="Hutan Bambu">Hutan Bambu</option>
						  <option value="Situ Rawa Gede">Situ Rawa Gede</option>
						  <option value="Curug Parigi">Curug Parigi</option>
						  <option value="Situ Rawa Pulo">Situ Rawa Pulo</option>
						</select>					
					</div>
					<div class="form-group mb-2">
						<label for="nama">Tujuan Akhir:</label>
						<select name="tujuan_akhir" class="form-select" aria-label="Default select example">
						  <option value="Terminal Bekasi">Terminal Bekasi</option>
						  <option value="Duta Harapan">Duta Harapan</option>
						  <option value="Kuliner Alun Alun">Kuliner Alun Alun</option>
						  <option value="Hutan Bambu">Hutan Bambu</option>
						  <option value="Situ Rawa Gede">Situ Rawa Gede</option>
						  <option value="Curug Parigi">Curug Parigi</option>
						  <option value="Situ Rawa Pulo">Situ Rawa Pulo</option>
						</select>
					</div>
					<button type="submit" class="btn btn-success btn-block">Kirim</button>
				  </form>			  			  
			  </div>
			</div>
</div>
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>