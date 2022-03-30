<div class="card">
    <div class="card-body">
        <h3 class="text-center mt-5">Halaman Tambah Posting</h3>
        <form action="<?php echo base_url('index.php/admin/insert_posting')?>" method="POST">
            <div class="form-group">
                <h6>Judul</h6>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <h6>Tanggal</h6>
                        <input type="date" class="form-control" name="tgl_rilis" value="<?php ini_set('date.timezone', 'Asia/Jakarta'); echo date('Y-m-d')?>" readonly>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <h6>Gambar Berita</h6>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <h6>Isi Berita</h6>
                <textarea class="form-control" name="paragraf" cols="40" rows="10" style="white-space: pre-wrap;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>