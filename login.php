<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Css -->
	<link rel="stylesheet" href="style.css">

	<!--------------------------------->
	<title>WEB TEKNOLOJİLERİ PROJESİ</title>

</head>

<body>


	<nav class="navbar navbar-expand-sm fixed-top 
	bg-info navbar-white">

		<div class="container">
		
			<a href="anasayfa.html" class="navbar-brand text-white">
	  		  <i class="fas fa-grin-wink"></i>
	  		   YUSUF TALHA ÇAM
	      	</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">

					<li class="nav-item">
						<a href="anasayfa.html" class="nav-link active  text-white">
	      				ANASAYFA
	      				</a></li>

					<li class="nav-item">
						<a href="ozgecmis.html" class="nav-link active  text-white">
	      				ÖZGEÇMİŞ
	      				</a></li>

	      			<li class="nav-item">
						<a href="memleketim.html" class="nav-link active  text-white">
	      				MEMLEKETİM
	      				</a></li>	

					<li class="nav-item">
						<a href="mirasimiz.html" class="nav-link active  text-white">
	      				MİRASIMIZ
	      				</a></li>
					 <li class="nav-item">
                         <a href="ilgialanlarim.html" class="nav-link active  text-white">
                        İLGİ ALANLARIM
                         </a></li>

	      			<li class="nav-item">
						<a href="iletisim.html" class="nav-link active  text-white">
	      				İLETİŞİM
	      				</a></li>

	      			<li class="nav-item">
						<a href="login.php" class="nav-link active  text-white">
	      				<i class="fas fa-sign-in-alt"></i>
	      				</a></li>					
				</ul>
			</div>

		</div>
	</nav>

	<header>

		<div class="bg-info text-light jumbotron balikcilar-jumbotron">

			<div class="container">

				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
					GİRİŞ EKRANI				
			</h1>
				</div>

			</div>

		</div>

	</header>
	
	<main>

		<div class="container">
			
			<form action="git-Login.php" method="POST">

				<div class="form-group">
					<label for="email">EMAİL</label>
					<input type="text" name="email" class="form-control" placeholder="Email " required="required">
				</div>

				<div class="form-group">
					<label for="password">ŞİFRE</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre " required="required">
				</div>

				<button class="btn btn btn-info" type="submit">Gönder</button>

				<br><br><br>

			</form>

		</div>

	</main>


	<footer class="py-5 bg-info text-white text-center">
	WEB TEKNOLOJİLERİ PROJESİ © YUSUF TALHA ÇAM
	</footer>

	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	

</body>

</html>