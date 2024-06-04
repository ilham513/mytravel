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
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine"></script>

	
	<style>
	#map { height: 400px; width: 100%; }

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
  <div class="card">
			  <div class="card-header py-3">
				<h5 class="mb-0"><strong>Perhitungan Rute Terpendek Menggunakan Algoritma Dijkstra</strong></h5>
			  </div>
			  <div class="card-body">
			  	<div id="map"></div>
				<?php
				// var_dump($_POST);die();
				$tujuan_awal = $this->input->post('tujuan_awal');
				$tujuan_akhir = $this->input->post('tujuan_akhir');

				switch ($tujuan_awal) {
				  case "Terminal Bekasi":
					$koordinat_awal = '-6.249421385812293, 107.01345846779058';
					break;
				  case "Situ Rawa Gede":
					$koordinat_awal = '-6.294413203824254, 106.97866125484562';
					break;
				  case "Situ Rawa Pulo":
					$koordinat_awal = '-6.390576306935979, 106.912913025538';
					break;
				  case "Curug Parigi":
					$koordinat_awal = '-6.341903858605932, 106.97021761661806';
					break;
				  case "Hutan Bambu":
					$koordinat_awal = '-6.253257858855076, 106.99547175417275';
					break;
				  case "Kuliner Alun Alun":
					$koordinat_awal = '-6.240678177142815, 107.00052821429833';
					break;
				  case "Duta Harapan":
					$koordinat_awal = '-6.2140038550306365, 107.02051653860833';
					break;
				  default:
					echo "ERROR!";
				}
								

				switch ($tujuan_akhir) {
					case "Terminal Bekasi":
					  $koordinat_akhir = '-6.249421385812293, 107.01345846779058';
					  break;
					case "Situ Rawa Gede":
					  $koordinat_akhir = '-6.294413203824254, 106.97866125484562';
					  break;
					case "Situ Rawa Pulo":
					  $koordinat_akhir = '-6.390576306935979, 106.912913025538';
					  break;
					case "Curug Parigi":
					  $koordinat_akhir = '-6.341903858605932, 106.97021761661806';
					  break;
					case "Hutan Bambu":
					  $koordinat_akhir = '-6.253257858855076, 106.99547175417275';
					  break;
					case "Kuliner Alun Alun":
					  $koordinat_akhir = '-6.240678177142815, 107.00052821429833';
					  break;
					case "Duta Harapan":
					  $koordinat_akhir = '-6.2140038550306365, 107.02051653860833';
					  break;
					default:
					  echo "ERROR!";
				  }
				?>
			  </div>
			</div>
</div>
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
	<script>
		// Inisialisasi peta
		var map = L.map('map').setView([-6.2368, 106.9911], 13);

		// Menambahkan layer peta
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
			attribution: 'Map data © <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
		}).addTo(map);

		// Menambahkan routing control
		L.Routing.control({
			waypoints: [
				L.latLng(<?=$koordinat_awal?>), // Koordinat awal
				L.latLng(<?=$koordinat_akhir?>)  // Koordinat Akhir
			],
			routeWhileDragging: true
		}).addTo(map);
		</script>
</body>

</html>