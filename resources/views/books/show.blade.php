@include('Layout/Header', ['title' => 'Buku'])
        <div class="container">
            <h1>Detail Buku</h1>
            <div>
                <p><strong>Kode Buku:</strong> {{ $book->kode_buku }}</p>
                <p><strong>Judul Buku:</strong> {{ $book->judul_buku }}</p>
                <p><strong>Penerbit Buku:</strong> {{ $book->penerbit_buku }}</p>
                <p><strong>Pengarang Buku:</strong> {{ $book->pengarang_buku }}</p>
                <p><strong>Jumlah Buku:</strong> {{ $book->jumlah_buku }}</p>
                <a href="{{ route('books.index') }}"><button type="button" class="btn btn-dark">Back</button></a>
            </div>
        </div>
@include('Layout/Footer')
