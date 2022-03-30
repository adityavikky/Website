<div class="container">
    <h5 class="text-center mt-5">Jadwal Dokter</h5>
    <div class="row row-cols-2">
        <?php foreach ($jadwal_dokter as $row) { ?>
            <?=$row->senin_pagi;?>
            <?=$row->senin_sore;?>
            <div class="col">
                <div class="card mb-5">
                    <div class="card-body">
                        <div class="group-input">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" value="<?php echo $row->nama_dokter?>" readonly>
                        </div>
                        <div class="group-input">
                            <label for="nama">Jabatan</label>
                            <input type="text" class="form-control" value="<?php echo $row->jabatan_dokter?>" readonly>
                        </div>
                        <div class="group-input mt-4">
                            <label for="senin">Senin</label>
                            <div class="row row-cols-2">
                                <div class="col-md-6">
                                    <select name="senin-pagi" id="senin-pagi" class="form-control">
                                        <option value="" <?php if ($row->senin_pagi=='') echo "";?>>-</option>
                                        <option value="" <?php if ($row->senin_pagi=='pagi') echo "selected";?>>08.00 - 12.00 WIB</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="senin-sore" id="senin-sore" class="form-control">
                                        <option value="">-</option>
                                        <option value="">16.00 - 20.00 WIB</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="group-input mt-4">
                            <label for="selasa">Selasa</label>
                            <div class="row row-cols-2">
                                <div class="col-md-6">
                                    <select name="selasa-pagi" id="selasa-pagi" class="form-control">
                                        <option value="">-</option>
                                        <option value="pagi">08.00 - 12.00 WIB</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="selasa-sore" id="selasa-sore" class="form-control">
                                        <option value="">-</option>
                                        <option value="sore">16.00 - 20.00 WIB</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="group-input mt-4">
                            <label for="rabu">Rabu</label>
                            <div class="row row-cols-2">
                                <div class="col-md-6">
                                    <select name="rabu-pagi" id="rabu-pagi" class="form-control">
                                        <option value="">-</option>
                                        <option value="pagi">08.00 - 12.00 WIB</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="rabu-sore" id="rabu-sore" class="form-control">
                                        <option value="">-</option>
                                        <option value="sore">16.00 - 20.00 WIB</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="group-input mt-4">
                            <label for="kamis">Kamis</label>
                            <div class="row row-cols-2">
                                <div class="col-md-6">
                                    <select name="kamis-pagi" id="kamis-pagi" class="form-control">
                                        <option value="">-</option>
                                        <option value="pagi">08.00 - 12.00 WIB</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="kamis-sore" id="kamis-sore" class="form-control">
                                        <option value="">-</option>
                                        <option value="sore">16.00 - 20.00 WIB</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="group-input mt-4">
                            <label for="jumat">Jum'at</label>
                            <div class="row row-cols-2">
                                <div class="col-md-6">
                                    <select name="jumat-pagi" id="jumat-pagi" class="form-control">
                                        <option value="">-</option>
                                        <option value="pagi">08.00 - 12.00 WIB</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="jumat-sore" id="jumat-sore" class="form-control">
                                        <option value="">-</option>
                                        <option value="sore">16.00 - 20.00 WIB</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="group-input mt-4">
                            <label for="sabtu">Sabtu</label>
                            <div class="row row-cols-2">
                                <div class="col-md-6">
                                    <select name="sabtu-pagi" id="sabtu-pagi" class="form-control">
                                        <option value="">-</option>
                                        <option value="pagi">08.00 - 12.00 WIB</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select name="sabtu-sore" id="sabtu-sore" class="form-control">
                                        <option value="">-</option>
                                        <option value="sore">16.00 - 20.00 WIB</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>