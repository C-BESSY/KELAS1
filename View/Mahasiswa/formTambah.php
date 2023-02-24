<div class="card">
    <div class="card-header">
        <h3>Tambah Mahasiswa</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="view/mahasiswa/prosesTambah.php">
            <div class="form-group">
                <label for="">Nim</label>
                <input required class="form-control" type="text" name="nim" />
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input required class="form-control" type="text" name="nama" />
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input required class="form-control" type="date" name="tanggalLahir" />
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input required class="form-control" type="text" name="alamat" />
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label> <br>
                <input required type="radio" name="jenisKelamin" value="L" /> Laki Laki
                <input required type="radio" name="jenisKelamin" value="P" /> Perempuan
            </div>

            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>
</div>