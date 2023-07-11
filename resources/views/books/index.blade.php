@include('Layout/Header', ['title' => 'Home'])
        <div class="container pt-4 bg-white">
            <h2>Data Buku Perpustakaan</h2>
            <a href="{{ route('books.create') }}" class="btn btn-info">Create</a>
            @include('flash-message')
            <table class="table table-hover">
                <tr>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Pengarang</th>
                    <th>Jumlah</th>
                    <th>Detail</th>
                    <th>action</th>
                </tr>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->kode_buku }}</td>
                        <td>{{ $book->judul_buku }}</td>
                        <td>{{ $book->penerbit_buku }}</td>
                        <td>{{ $book->pengarang_buku }}</td>
                        <td>{{ $book->jumlah_buku }}</td>
                        <td>
                            <a href="{{ route('books.show', ['book' => $book->id]) }}">
                                <button type="button" class="btn btn-outline-info">
                                    Detail
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('books.edit',[$book]) }}">
                                <button type="button" class="btn btn-secondary">
                                    Edit
                                </button>
                            </a>
                            <a href="{{ route('books.destroy',[$book]) }}">
                                <button type="button" class="btn btn-danger">
                                    Delete
                                </button>
                            </a>
                    </tr>
                @endforeach
            </table>
        </div>
@include('Layout/Footer')
