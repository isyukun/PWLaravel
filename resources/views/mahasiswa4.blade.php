<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-3 pt-3 bg-white">
        @for ($i = 0; $i < 5; $i++)
        <div class="alert alert-success text-center d-inline-block">
            {{$i}}
        </div>
        @endfor
    </div>
</body>
</html>