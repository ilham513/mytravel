<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DERDZA Tour & Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<style>
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
		background: linear-gradient(#ebf1ff, #ffffff);
		/* Fallback for older browsers */
		background: -webkit-linear-gradient(#ebf1ff, #ffffff);
		background: -moz-linear-gradient(#ebf1ff, #ffffff);
		background: -o-linear-gradient(#ebf1ff, #ffffff);	
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

	.btn-oranye-cerah {
      background-color: #FFA500;
      border-color: #FFA500;
      color: #fff;
    }
    .btn-oranye-cerah:hover {
      background-color: #FF8C00;
      border-color: #FF8C00;
      color: #fff;
    }
	</style>

  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-light bg-light px-2">
  <div class="container-fluid">
    <a class="navbar-brand " href="<?=site_url()?>">Derdza Tour & Travel</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item d-none">
          <a class="nav-link active" aria-current="page" href="<?=site_url()?>">Beranda</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="<?=site_url('login')?>">Admin</a>
      </span>
    </div>
  </div>
</nav>


	<div class="container row px-5">
		<div class="col-7 mb-3 px-5 align-self-center">
		  	<div class="container mt-5">
				<h1 class="mb-3 fw-bold">Happy Traveling!</h1>

				<p>Selamat datang di Derdza Tour & Travel, pintu menuju petualangan tak terlupakan! Kami adalah mitra setia Anda dalam merencanakan dan menjalani perjalanan yang mengesankan. Dengan staf yang berpengalaman dan pengetahuan yang luas tentang destinasi di seluruh dunia, kami siap membawa Anda pada perjalanan yang tak terlupakan.</p>
				<p>Derdza Tour & Travel menawarkan paket liburan yang disesuaikan dengan kebutuhan dan keinginan Anda. Apakah Anda mencari petualangan alam yang menakjubkan, liburan santai di pantai, atau perjalanan budaya yang memikat, kami memiliki sesuatu untuk semua orang. </p>

				<a href="<?=site_url().'/welcome/homepage_daftar'?>"><button type="button" class="btn fw-bold btn-oranye-cerah">Pesan Sekarang</button></a>
			</div>
		</div>
		<div class="col-5">
		  <img class="mt-5" width="600px" src="<?=base_url()?>img/main.png"/>
		</div>
	</div>
	



<div class="container mb-5 mt-5">
    <h1 class="mb-4">Galeri</h1>
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="<?=base_url().'img/corusel1.jpg'?>" height="400px" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Pantai Lombok</h5>
			<p>Nikmati keindahan alam yang memesona di Pantai Lombok! Dengan pasir putih yang lembut, air laut yang jernih, dan pemandangan sunset yang menakjubkan. Liburan tak terlupakan menanti Anda di sini!</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="<?=base_url().'img/corusel2.jpg'?>" height="400px" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Gunung Kidul</h5>
			<p>Temukan keajaiban alam di Gunung Kidul! Dengan pesona pantai eksotis, gua menakjubkan, dan panorama perbukitan yang memukau. Petualangan tak terlupakan menanti di sini!</p>
		  </div>
		</div>
		<div class="carousel-item">
		  <img src="<?=base_url().'img/corusel3.jpg'?>" height="400px" class="d-block w-100" alt="...">
		  <div class="carousel-caption d-none d-md-block">
			<h5>Candi Bali</h5>
			<p>Telusuri keindahan sejarah di Candi Bali! Dengan arsitektur klasik yang megah, nuansa spiritual yang memikat, dan aura mistis yang memikat. Pengalaman budaya yang tak terlupakan menanti di sini!</p>
		  </div>
		</div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	  </button>
	</div>
</div>




<div class="container py-5">
    <h1 class="mb-4">Testimoni</h1>
    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Jefry Polin <span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span></h5>
            <p class="card-text">"Derdza Tour & Travel memberikan pengalaman liburan yang tak terlupakan, sangat direkomendasikan untuk semua jenis wisatawan."</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Andi Supardi <span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span></h5>
            <p class="card-text">"Derdza Tour & Travel menyediakan layanan yang tak tertandingi. Staf mereka sangat informatif dan membantu."</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Budi Man <span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span></h5>
            <p class="card-text">"Derdza Tour & Travel memberikan perjalanan yang luar biasa. Stafnya ramah dan profesional, menjadikan liburan kami sangat menyenangkan.."</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Cinta Lauren <span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span><span class="rating" style="font-size: 18px; color: gold;"><i class="fas fa-star"></i></span></h5>
            <p class="card-text">"Derdza Tour & Travel memberikan liburan yang mengesankan. Mereka sangat profesional dan ramah, memastikan setiap detail teratur dengan baik."</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>


<div class="container py-5">
    <h1 class="mb-4">Pilihkan Paket</h1>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Paket Hemat</h5>
            <p class="card-text">Termasuk: Transportasi, Penginapan, City Tour.</p>
            <a href="<?=site_url().'/welcome/homepage_daftar'?>" class="btn fw-bold btn-oranye-cerah">Pilih</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Paket Keluarga</h5>
            <p class="card-text">Termasuk: Transportasi, Penginapan, Aktivitas Keluarga.</p>
            <a href="<?=site_url().'/welcome/homepage_daftar'?>" class="btn fw-bold btn-oranye-cerah">Pilih</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Paket Solo</h5>
            <p class="card-text">Termasuk: Transportasi, Penginapan, Pengalaman Wisata Solo.</p>
            <a href="<?=site_url().'/welcome/homepage_daftar'?>" class="btn fw-bold btn-oranye-cerah">Pilih</a>
          </div>
        </div>
      </div>
    </div>
  </div>



<!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	
  </body>
</html>