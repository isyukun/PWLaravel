<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendataan Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container pt-4 bg-white">
        <h2>Form Pendataan Buku</h2>
        @if ($errors->any())
            <div class="alert alert danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <Form action="{{ route('books.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Kode Buku</label>
                <input type="text" class="form-control" name="kode_buku">
            </div>
            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="judul_buku">
            </div>
            <div class="mb-3">
                <label class="form-label">Penerbit Buku</label>
                <input type="text" class="form-control" name="penerbit_buku">
            </div>
            <div class="mb-3">
                <label class="form-label">Pengarang Buku</label>
                <input type="text" class="form-control" name="pengarang_buku">
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Buku</label>
                <input type="text" class="form-control" name="jumlah_buku">
            </div>
            <button type="submit" class="btn btn-secondary">Simpan</button>
        </form>
    </div>
</body>
</html>
