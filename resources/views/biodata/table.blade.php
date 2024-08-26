<div class="table-responsive">
    <table class="table table-striped">
        <thead class="table-light fw-bolder">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            @foreach ($biodata as $manusia)
                <tr>
                    <td>{{$i++}}.</td>
                    <td>{{$manusia->nik}}</td>
                    <td>{{$manusia->name}}</td>
                    <td>{{$manusia->umur}}</td>
                    <td>{{$manusia->alamat}}</td>
                    <td>
                        <a href="{{ route('biodata.edit', $manusia->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('biodata.destroy', $manusia->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>