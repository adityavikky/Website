<h3 class="text-center mt-4 font-weight-bolder">Halaman Dashboard Berita</h3>
<div class="card">
    <div class="card-body">
        <h5>Tambah Berita</h5>
        <a href="<?php echo base_url('index.php/admin/tambah_posting');?>" class="btn btn-info btn-block">Tambah Posting</a>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5>Daftar Berita</h5>
        <div class="" style="height: 600px; overflow:scroll;">
            <table class="table">
                <thead class="thead thead-dark text-center">
                    <th>No</th>
                    <th>Tanggal Berita</th>
                    <th>Judul Posting</th>
                    <th style="width: 50%;">Paragraf Isi</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                        $no = 0;
                        foreach ($posting as $row){
                            $no++;
                            ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td class="text-center"><?php echo $row->tgl_rilis;?></td>
                                    <td><?php echo $row->judul;?></td>
                                    <td><?php echo $row->paragraf;?></td>
                                    <td>
                                        <a href="<?php echo base_url('index.php/admin/edit_posting/'.$row->id_posting)?>" class="btn btn-info btn-block">Edit</a>    
                                        <a href="<?php echo base_url('index.php/admin/hapus_posting/'.$row->id_posting)?>" class="btn btn-danger btn-block">Hapus</a>    
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>