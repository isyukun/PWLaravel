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
				{{$nilai_huruf;}}
			</h1> 

			<br>

			@switch($nilai_huruf)
				@case('A')
				<div class="alert alert-success text-center d-inline-block">
				Sangat Baik
				</div>
				@break
				@case('B')
				<div class="alert alert-success text-center d-inline-block">
				Baik Sekali
				</div>
				@break
				@case('C')
				<div class="alert alert-warning text-center d-inline-block">
				Cukup
				</div>
				@break
				@case('D')
				<div class="alert alert-warning text-center d-inline-block">
				Cukup Sekali
				</div>
				@break
				@case('E')
				<div class="alert alert-danger text-center d-inline-block">
				Kurang
				</div>
				@break
				@default
				<div class="alert alert-danger text-center d-inline-block">
				Sangat kurang, belajar lagi!!!
				</div>
			@endswitch
		</div>

</body>
</html>