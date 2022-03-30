<?php foreach ($id_posting as $row) { ?>
    <form action="<?php echo base_url('index.php/admin/pros_edit_posting')?>" method="POST">
        <div class="card mt-5">
            <div class="card-body">
                <h5 class="text-center">Edit Informasi Postingan</h5>
                <label for="judul">Judul</label>
                <input type="text" value="<?php echo $row->id_posting?>" name="id_posting" hidden>
                <input type="text" class="form-control" name="judul" value="<?php echo $row->judul?>">
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" value="<?php echo $row->tgl_rilis?>" name="tgl_rilis" class="form-control" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="gambar">Gambar Berita</label><br>
                        <input type="file" name="gambar-berita">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="isi-berita">Isi Berita</label>
                    <textarea type="text" cols="40" rows="10" name="paragraf" class="form-control" style="white-space: pre-wrap;"><?php echo $row->paragraf?></textarea>
                </div>
            </div>
            <input type="submit" value="Simpan" class="btn btn-primary ml-auto m-5">
        </div>
    </form>

<?php }?>