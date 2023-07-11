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
		</div>
</body>
</html>