<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('pelanggan/'); ?>">Travel Saya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('pelanggan/logout'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  <div class="container mt-3">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Bookng Saya</h2>
    <a href="<?=site_url().'/pelanggan/booking_add'?>"><button type="button" class="btn btn-success">Pesan Baru</button></a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID Booking</th>
        <th scope="col">Tanggal Keberangkatan</th>
        <th scope="col">Tujuan</th>
        <th scope="col">Armada</th>
        <th scope="col">Harga</th>
        <th scope="col">Pembayaran</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($array_booking as $booking): ?>
      <tr>
        <th scope="row">TRV0<?=$booking->id_booking?></th>
        <td><?=$booking->tanggal_keberangkatan?></td>
        <td><?=$booking->nama_tujuan?></td>
        <td><?=$booking->nama_armada?></td>
        <td>Rp <?=number_format($booking->harga)?></td>
        <td><?= $booking->sudah_bayar == true ? 'Lunas' : '<span class="text-danger">Belum Bayar</span>' ?></td>
      </tr>
      <?php endforeach; ?>
      <!-- Tambahkan lebih banyak baris sesuai dengan kebutuhan -->
    </tbody>
  </table>
</div>
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>