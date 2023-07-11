@include('Layout/Header', ['title' => 'Buku'])
        <div class="container pt-4 bg-white">
            <h2>Data Anggota Perpustakaan</h2>
            <a href="{{ route('members.create') }}" class="btn btn-info">Create</a>
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>KTP</th>
                    <th>Email</th>
                    <th>Nomor Telp</th>
                    <th>Tanggal Daftar</th>
                    <th>action</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Edit | Delete</td>
                </tr>
            </table>
        </div>
@include('Layout/Footer')
