<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar DERDZA Tour & Travel</title>
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
    <a class="navbar-brand " href="#">Derdza Tour & Travel</a>
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



<div class="container mb-5 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Form Daftar -->
                <div class="card">
                    <div class="card-header">
                        Daftar
                    </div>
                    <div class="card-body">
                        <!-- Form Daftar -->
                        <form action="<?=site_url().'/welcome/homepage_daftar_go'?>" method="post">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input name="nama_pelanggan" type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">No Telpon</label>
                                <input name="no_telpon" type="number" class="form-control" id="nama" placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Masukkan password">
                            </div>
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>    

          <div class="container mx-auto text-center mt-5">
                  Sudah memiliki akun silahkan login <a href="<?=site_url().'/welcome/homepage_login'?>">di sini</a>!
          </div>
        
</div>


<!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	
  </body>
</html>