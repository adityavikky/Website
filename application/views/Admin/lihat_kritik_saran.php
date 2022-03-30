<section>
    <h5 class="text-center mt-5">Kritik dan Saran</h5>
</section>

<section>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contact as $row) { ?>

                        <tr>
                            <td>
                                <?php echo $row->nama_depan;?>
                            </td>
                            <td>
                                <?php echo $row->nama_belakang;?>
                            </td>
                            <td>
                                <?php echo $row->no_telepon?>
                            </td>
                            <td>
                                <?php echo $row->email;?>
                            </td>
                            <td>
                                <?php echo $row->pesan;?>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>


                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</section>