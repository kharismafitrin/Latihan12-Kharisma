<form action="{{ route('biodata.store') }}" method="post" class="p-3">
    @csrf
    <div class="row">
        <div class="form-floating col-6 mb-3">
            <input type="text" name='name' class="form-control" placeholder="nama" id="floatingInput"">
                <label class=" mx-2" for=" floatingInput">Nama Lengkap</label>
        </div>
        <div class="form-floating col-6 mb-3">
            <input type="text" name='nik' class="form-control" placeholder="nik" id="floatingInput"">
                <label class=" mx-2" for=" floatingInput">NIK</label>
        </div>
        <div class="form-floating col-6 mb-3">
            <input type="number" name='umur' class="form-control" placeholder="umur" id="floatingInput"">
                <label class=" mx-2" for=" floatingInput">Umur</label>
        </div>
        <div class="form-floating col-6">
            <textarea name="alamat" class="form-control" id="floatingTextarea" placeholder="alamat"></textarea>
            <label class=" mx-2" for="floatingTextarea">Alamat</label>
        </div>
        <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" value="Simpan">
        </div>
    </div>
</form>