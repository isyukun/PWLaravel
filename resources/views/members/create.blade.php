<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iska Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container pt-4 bg-white">
        <h2>Form Pendaftaran Anggota Perpustakaan</h2>
        @if ($errors->any())
            <div class="alert alert danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <Form action="{{ route('members.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label class="form-label">No KTP</label>
                <input type="text" class="form-control" name="ktp">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telp</label>
                <input type="text" class="form-control" name="pengarang">
            </div>
            <button type="button" class="btn btn-secondary">Simpan</button>
        </form>
    </div>
</body>
</html>
