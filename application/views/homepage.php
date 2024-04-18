<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
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
	  color: white;
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


<nav class="navbar navbar-expand-lg navbar-light bg-light px-2">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">My Travel</a>
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
        <li class="nav-item">
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
		<div class="col-7 px-5 align-self-center">
		  	<div class="container mt-5">
				<h1 class="mb-3 fw-bold">Booking Tiket</h1>

				<form action="<?=site_url('welcome/lacak')?>" method="get">
				  
				  <div class="form-group mb-3">
					<label for="exampleFormControlSelect1" class="mb-1">Nama :</label>
					<input name="resi_pengiriman" type="text" class="form-control" id="exampleInputPassword1">
				  </div>
				  
				  <div class="form-group mb-3">
					<label for="exampleFormControlSelect1" class="mb-1">Tujuan :</label>
					<select class="form-select" aria-label="Default select example">
					  <option value="1">Bali</option>
					  <option value="2">Lombok</option>
					  <option value="3">Kalimantan</option>
					</select>
				  </div>
				  
				  <div class="form-group mb-3">
					<label for="exampleFormControlSelect1" class="mb-1">Tanggal :</label>
					<input name="resi_pengiriman" type="date" class="form-control" id="exampleInputPassword1">
				  </div>
				  
				  <div class="form-group mb-3">
					<label for="exampleFormControlSelect1" class="mb-1">Paket :</label>
					<select class="form-select" aria-label="Default select example">
					  <option value="1">Ekonomis</option>
					  <option value="2">Premium</option>
					  <option value="3">VIP</option>
					</select>
				  </div>
				  
				  <button type="submit" class="btn btn-success">Lacak</button>
				</form>				
				
			</div>
		</div>
		<div class="col-5">
		  <img class="mt-5" width="600px" src="<?=base_url()?>img/main.png"/>
		</div>
	</div>
	
	
  </body>
</html>