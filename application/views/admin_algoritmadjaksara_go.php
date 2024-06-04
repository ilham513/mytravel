<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dijkstra</title>
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

	.center {
	  margin: auto;
	  margin-top:100px;
	  width: 60%;
	  padding: 10px;
	  font-size: 18px;
	}
	td{
	  padding: 2px 2px;
	}
	.nunito{
	  font-family: 'Nunito', sans-serif;
	}
	
	body {
	  background-color: #163a76;
	  font-family: 'Open Sans', sans-serif;
	  
	   background: rgb(22,58,118);
background: linear-gradient(94deg, rgba(22,58,118,1) 0%, rgba(34,92,187,1) 100%); 
	}
	
	h4{
	  font-size: 24px;
	}
	button{
	  padding: 3px 12px 3px 12px;
	}
	
	#myBtn {
	  display: none; /* Hidden by default */
	  position: fixed; /* Fixed/sticky position */
	  bottom: 20px; /* Place the button at the bottom of the page */
	  right: 30px; /* Place the button 30px from the right */
	  z-index: 99; /* Make sure it does not overlap */
	  border: none; /* Remove borders */
	  outline: none; /* Remove outline */
	  background-color: white; /* Set a background color */
	  color: #163a76; /* Text color */
	  cursor: pointer; /* Add a mouse pointer on hover */
	  padding: 8px; /* Some padding */
	  border-radius: 10px; /* Rounded corners */
	  font-size: 18px; /* Increase font size */
	}

	#myBtn:hover {
	  background-color: #555; /* Add a dark-grey background on hover */
	}

	</style>

  </head>

<body>
  <!--Main Navigation-->
  <header>
    <?php $this->load->view('component/sidebar.php');?>

    <?php $this->load->view('component/navbar.php');?>	
  </header>
  <!--Main Navigation-->

<!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">

	 <!-- Section: Main chart -->
		  <section class="mb-4">
			<div class="card">
			  <div class="card-header py-3">
				<h5 class="mb-0"><strong>Perhitungan Rute Terpendek Menggunakan Algoritma Dijkstra</strong></h5>
			  </div>
			  <div class="card-body">
				<?php
				class Dijkstra {
					protected $graph;
					protected $distances;
					protected $previous;
					protected $queue;

					public function __construct($graph) {
						$this->graph = $graph;
					}

					public function shortestPath($source, $target) {
						// Initialize data structures
						$this->distances = [];
						$this->previous = [];
						$this->queue = new SplPriorityQueue();

						// Set distances to infinity and mark all nodes as unvisited
						foreach ($this->graph as $vertex => $adj) {
							$this->distances[$vertex] = INF;
							$this->previous[$vertex] = null;
						}

						// Enqueue the source vertex with priority 0
						$this->queue->insert($source, 0);
						$this->distances[$source] = 0;

						// Loop through the queue
						while (!$this->queue->isEmpty()) {
							// Dequeue the vertex with the smallest distance
							$current = $this->queue->extract();

							if ($current === $target) {
								// We have found the shortest path
								$path = [];
								while ($this->previous[$current] !== null) {
									array_unshift($path, $current);
									$current = $this->previous[$current];
								}
								array_unshift($path, $source);
								return $path;
							}

							// Visit all adjacent vertices
							foreach ($this->graph[$current] as $neighbor => $weight) {
								// Calculate the distance to the neighbor
								$distance = $this->distances[$current] + $weight;

								// If a shorter path is found, update distance and previous node
								if ($distance < $this->distances[$neighbor]) {
									$this->distances[$neighbor] = $distance;
									$this->previous[$neighbor] = $current;
									// Enqueue the neighbor with updated priority
									$this->queue->insert($neighbor, -$distance);
								}
							}
						}

						// If we reach here, there is no path from source to target
						return null;
					}
				}

				// Example usage
				$graph = [
					'Duta Harapan' => ['Summarecon Bekasi' => 3],
					'Summarecon Bekasi' => ['Duta Harapan' => 3, 'Kuliner Alun Alun' => 2],
					'Kuliner Alun Alun' => ['Summarecon Bekasi' => 2, 'Terminal Bekasi' => 2, 'Mall Metropolitan' => 3],
					'Terminal Bekasi' => ['Kuliner Alun Alun' => 2],
					'Mall Metropolitan' => ['Kuliner Alun Alun' => 3,'Hutan Bambu' => 2],
					'Hutan Bambu' => ['Mall Metropolitan' => 2,'JL Siliwangi' => 5],
					'JL Siliwangi' => ['Hutan Bambu' => 5,'Situ Rawa Gede' => 4, 'Situ Rawa Pulo' => 10, 'Curug Parigi' => 6],
					'Situ Rawa Gede' => ['JL Siliwangi' => 4],
					'Curug Parigi' => ['JL Siliwangi' => 6],
					'Situ Rawa Pulo' => ['JL Siliwangi' => 10],
				];

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
								    

				$dijkstra = new Dijkstra($graph);
				$path = $dijkstra->shortestPath( $this->input->post('tujuan_awal') , $this->input->post('tujuan_akhir') );
				if ($path === null) {
					echo "No path found";
				} else {
					#echo "Shortest path: " . implode(' -> ', $path);
				}
				?>
			  </div>

			  <div id="map"></div>	

			</div>
		  </section>
	  <!-- Section: Main chart -->
	
    </div>
  </main>
  <!--Main layout-->

	<!-- jQuery untuk pencarian dan pengurutan -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<!-- MDB -->
	<script type="text/javascript" src="<?=base_url()?>js/mdb.min.js"></script>
	<!-- Custom scripts -->
	<script type="text/javascript" src="<?=base_url()?>js/admin.js"></script>
		
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
			lineOptions: {
				styles: [{color: 'blue', opacity: 1, weight: 7}]
			},
			routeWhileDragging: true
		}).addTo(map);
		</script>
</body>

</html>