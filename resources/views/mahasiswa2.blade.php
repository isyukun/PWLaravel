<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
		<div class="container text-center mt-3 pt-3 bg-white">
			<h1 class="bg-dark px-3 py-1 text-white d-inline-block">
				{{$nama;}}
			</h1> 

			<h1 class="bg-dark px-3 py-1 text-white d-inline-block">
				{{$nilai;}}
			</h1> 
			<h1 class="bg-dark px-3 py-1 text-white d-inline-block">
				{{date(now())}}
			</h1> 

			<br>
		<!-- <div class="alert alert-secondary d-inline-block"> -->
			<!-- <?php
			//if($nilai>=60){
				// echo " Selamat, Anda lulus";
			// }else{
				// echo "Maaf, Anda tidak lulus";
			// }
			?> -->
		<!-- </div> -->

		@if($nilai>=60)
		<div class="alert alert-success text-center d-inline-block">
			Selamat, Anda lulus
		</div>
		@else
		<div class="alert alert-danger text-center d-inline-block">
			Maaf, Anda tidak lulus
		</div>
		@endif
		</div>

</body>
</html>