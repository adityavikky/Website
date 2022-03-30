<div class="vh-100 d-flex align-align-items-center">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/klinik/1.jpg');?>" class="d-block img-fluid vw-100 vh-100" alt="..." style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/klinik/2.jpg');?>" class="d-block img-fluid vw-100 vh-100" alt="..." style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/klinik/3.jpg');?>" class="d-block img-fluid vw-100 vh-100" alt="..." style="object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
</div>

<!-- Opening -->
<div class="vh-100 align-items-center d-flex" id="home">
    <div class="container">
        <div class="mb-5 text-center font-weight-bolder" style="color: #56627E;" data-aos="fade-down">
            <h1>Selamat Datang</h1>
            <h3>Klinik Pratama Rahmat Medika</h3>
        </div>
        <div class="row row-cols-1 mt-4 align-items-center">
            <div class="col-md-6">
                <p class="text-justify" data-aos="fade-right">
                    Klinik Pratama Rahmat Medika merupakan bentuk usaha yang didirikan oleh dr. Rahmat dan keluarga pada tahun 2016, dan mulai beroperasi dengan bekal surat ijin opersional pada tahun 2016. Alasan didirikannya Klinik Pratama Rahmat Medika adalah untuk dapat memberikan pelayanan kesehatan yang lebih baik dan maksimal kepada pasien. 
                </p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url('assets/img/klinik/2.jpg');?>" alt="" height="400px" class="rounded-end shadow-lg img-fluid" data-aos="fade-left">
            </div>
        </div>
    </div>
</div>
<!--  -->
<!-- News -->
<div class="berita align-items-center d-flex" id="news" style="background-color: #56627E;">
    <div class="container py-5 my-5 ">
        <h3 class="text-center mt-5 font-weight-bold" style="color: #EEEEEE;" data-aos="fade-bottom">BERITA</h3>
        <!-- Perulangan Postingan -->
        <div class="row row-cols-1" data-aos="fade-bottom">
            <?php
                foreach ($posting as $row) {
                    ?>
    
                    <div class="col-md-4">
                        <div class="card my-4">
                            <div class="card-body shadow" style="color: #56627E;">
                                <h3 class="card-title  text-center font-weight-bold"><?php echo $row->judul;?></h3>
                                <h6><?php echo $row->tgl_rilis;?></h6>
                                <p class="text-justify"><?php echo $row->paragraf;?></p>
                            </div>
                        </div>
                    </div>
    
                    <?php
                }
            ?>    
        </div>
    </div>
</div>
<!--  -->
<!-- Jam Operasional -->
<div class="vh-100 d-flex align-items-center" id="jadwal-operasional">
    <div class="container mt-4" >
        <h3 class="text-center font-weight-bold" style="color: #56627E;" data-aos="fade-bottom">Jam Operasional</h3>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card my-4" style="background-color: #56627E; color: #EEEEEE;" data-aos="fade-right">
                    <div class="card-body rounded-lg shadow-lg text-center">
                        <h3 class="card-title">Senin - Jumat</h3>
                        <p>
                        Pagi 08:00 - 12:00 WIB <br>
                        Sore 16:00 - 20:00 WIB
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card my-4" style="background-color: #56627E; color: #EEEEEE;" data-aos="fade-left">
                    <div class="card-body rounded-lg shadow-lg text-center">
                        <h3 class="card-title">Sabtu</h3>
                        <p>
                        Pagi 08:00 - 12:00 WIB <br>
                        Sore 16:00 - 20:00 WIB
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->
<!-- Alamat -->
<div class="vh-100 d-flex align-items-center" id="alamat" style="background-color: #56627E;">
    <div class="container">
        <div class="row row-cols-1 align-items-center">
            <div class="col-md-4 text-center" style="color: #EEEEEE;" data-aos="fade-right">
                <img src="<?php echo base_url('assets/img/logo-putih.png');?>" alt="" height="100px" class="text-center">
                <h5 class="mt-4">Alamat</h5>
                <p>Jl. Kedungmundu No.24-A, Kedungmundu, Kec. Tembalang, Kota Semarang, Jawa Tengah 50273</p>
            </div>
            <div class="col-md-8 text-center mb-4" data-aos="zoom-in">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.8798722577335!2d110.459906915358!3d-7.0234040707567695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c500cb25e39%3A0x6d4a3a2832471f9d!2sKlinik%20Rahmat%20Medika%20(BPJS%20%26%20UMUM)!5e0!3m2!1sid!2sid!4v1645283252147!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" class="maps"></iframe>
            </div>
            <!-- <div class="col">
                <h3 class="text-center">Kritik dan Saran</h3>
                <form action="">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Nama">Nama Depan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Nomor Telepon</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Pesan</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Nama">Nama Belakang</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Nama">Email</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-info float-right mt-4">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div> -->
        </div>
    </div>
</div>
<!--  -->
<!-- Jadwal Dokter -->
<div class="vh-100 d-flex align-items-center" id="jadwal-dokter">
    <div class="container">
        <h3 class="text-center font-weight-bold" data-aos="fade-bottom">Jadwal Dokter</h3>
        <div class="row row-cols-2 my-5">
            <!-- dr. Dina EVA ARIANTI -->
            <div class="col-md-6 my-4" data-aos="fade-right">
                <div class="row row-cols-1 align-items-center">
                    <div class="col-md-6">
                        <img src="<?php echo base_url('assets/img/dokter.png')?>" alt="dokter" style="height: 200px; width: 200px;">
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mx-auto font-weight-bold" id="exampleModalLabel">dr. DINA EVA ARIANTI</h5>
                            </div>
                                <div class="modal-body">
                                    <table class="table text-center">
                                        <th>
                                            Hari
                                        </th>
                                        <th>
                                            Pagi
                                        </th>
                                        <th>
                                            Sore
                                        </th>
                                        <tr>
                                            <td>Senin</td>
                                            <td>08:00 - 12:00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>08:00 - 12:00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Jumat</td>
                                            <td>08:00 - 12:00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 text-justify align-items-center">
                        <h5 class="font-weight-bold">dr. DINA EVA ARIANTI</h5>
                        <h6>Dokter Umum</h6>
                        <button class="btn btn-dongker mt-4" data-toggle="modal" data-target="#exampleModal">Lihat Jadwal</button>
                    </div>
                </div>
            </div>
            <!-- drg. Nuryati WINDARTIK -->
            <div class="col-md-6 my-4" data-aos="fade-left">
                <div class="row row-cols-1 align-items-center">
                    <div class="col-md-6">
                        <img src="<?php echo base_url('assets/img/dokter.png')?>" alt="dokter" style="height: 200px; width: 200px;">
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mx-auto font-weight-bold" id="exampleModalLabel">drg. NURYATI WINDARTIK</h5>
                            </div>
                                <div class="modal-body">
                                    <table class="table text-center">
                                        <th>
                                            Hari
                                        </th>
                                        <th>
                                            Pagi
                                        </th>
                                        <th>
                                            Sore
                                        </th>
                                        <tr>
                                            <td>Senin</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>08:00 - 12:00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>08:00 - 12:00<</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Jumat</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>08:00 - 12:00</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 align-items-center">
                        <h5 class="font-weight-bold">drg. NURYATI WINDARTIK</h5>
                        <h6>Dokter Gigi</h6>
                        <button class="btn btn-dongker mt-4" data-toggle="modal" data-target="#exampleModal1">Lihat Jadwal</button>
                    </div>
                </div>
            </div>
            <!-- dr. M. FARIZ WAFAUL AHYAR -->
            <div class="col-md-6 my-4"data-aos="fade-right">
                <div class="row row-cols-1 align-items-center">
                    <div class="col-md-6">
                        <img src="<?php echo base_url('assets/img/doktor.png')?>" alt="dokter" style="height: 200px; width: 200px;">
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mx-auto font-weight-bold" id="exampleModalLabel">dr. M. FARIZ WAFAUL AHYAR</h5>
                            </div>
                                <div class="modal-body">
                                    <table class="table text-center">
                                        <th>
                                            Hari
                                        </th>
                                        <th>
                                            Pagi
                                        </th>
                                        <th>
                                            Sore
                                        </th>
                                        <tr>
                                            <td>Senin</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>08:00 - 12:00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>08:00 - 12:00<</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Jumat</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>08:00 - 12:00</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 align-items-center">
                        <h5 class="font-weight-bold">dr. M. FARIZ WAFAUL AHYAR</h5>
                        <h6>Dokter Umum</h6>
                        <button class="btn btn-dongker mt-4" data-toggle="modal" data-target="#exampleModal2">Lihat Jadwal</button>
                    </div>
                </div>
            </div>
            <!-- dr. HANSEN, SH -->
            <div class="col-md-6 my-4"data-aos="fade-left">
                <div class="row row-cols-1 align-items-center">
                    <div class="col-md-6">
                        <img src="<?php echo base_url('assets/img/doktor.png')?>" alt="dokter" style="height: 200px; width: 200px;">
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mx-auto font-weight-bold" id="exampleModalLabel">dr. HANSEN, SH</h5>
                            </div>
                                <div class="modal-body">
                                    <table class="table text-center">
                                        <th>
                                            Hari
                                        </th>
                                        <th>
                                            Pagi
                                        </th>
                                        <th>
                                            Sore
                                        </th>
                                        <tr>
                                            <td>Senin</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>08:00 - 12:00</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Kamis</td>
                                            <td>08:00 - 12:00<</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Jumat</td>
                                            <td></td>
                                            <td>16:00 - 20:00</td>
                                        </tr>
                                        <tr>
                                            <td>Sabtu</td>
                                            <td>08:00 - 12:00</td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-6 align-items-center">
                        <h5 class="font-weight-bold">dr. HANSEN, SH</h5>
                        <h6>Dokter Gigi</h6>
                        <button class="btn btn-dongker mt-4" data-toggle="modal" data-target="#exampleModal3">Lihat Jadwal</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Visi Misi -->

<div class="vh-100 d-flex align-items-center" id="visi-misi" style="background-color: #56627E;">
    <div class="container">
        <div class="row text-center text-light">
            <div class="col-md-6" data-aos="zoom-in-right">
                <h4 class="font-weight-bold">Visi</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis totam, vel consequatur veritatis iure nesciunt, fugit eveniet libero soluta maxime, delectus perspiciatis rem excepturi ipsum voluptas dolores quis? Cum, sapiente.</p>
            </div>
            <div class="col-md-6" data-aos="zoom-in-left">
                <h4 class="font-weight-bold">Misi</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis recusandae ipsa similique rem quae maiores consectetur unde id aperiam impedit nostrum reiciendis praesentium animi quisquam rerum, dolorum quo. Libero, molestiae?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae deleniti quas pariatur odit fugiat consequatur fuga illum ex nulla error dicta excepturi soluta alias in iste, accusantium ratione ab enim?</p>
            </div>
        </div>
    </div>
</div>

<!-- Contact Us -->
<div class="vh-100 d-flex align-items-center" id="contact">
    <div class="container">
        <h3 class="text-center warna-biru font-weight-bold" data-aos="fade-bottom">Kritik dan Saran</h3>
        <form action="<?php echo base_url('index.php/admin/insert_contact');?>" method="POST">
            <div class="container col-md-6 mt-4 mx-auto warna-biru">
                <div class="form-group" data-aos="zoom-in-right">
                    <label for="Nama">Nama Depan</label>
                    <input type="text" name="nama_depan" class="form-control" placeholder="Masukkan nama depan..." required>
                </div>
                <div class="form-group" data-aos="zoom-in-left">
                    <label for="Nama">Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control" placeholder="Masukkan nama belakang...">
                </div>
                <div class="form-group" data-aos="zoom-in-right">
                    <label for="Nama">Nomor Telepon</label>
                    <input type="number" name="no_telepon" minlength="11" class="form-control" placeholder="contoh : 085123123123" required>
                </div>
                <div class="form-group" data-aos="zoom-in-left">
                    <label for="Nama">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email...">
                </div>
                <div class="form-group" data-aos="zoom-in-right">
                    <label for="Nama">Pesan</label>
                    <textarea type="text" name="pesan" cols="40" rows="10" class="form-control" placeholder="Masukkan Pesan..." required></textarea>
                </div>
                <button class="btn btn-dongker float-right mt-4 align-self-end" data-aos="zoom-in-left">Kirim</button>
            </div>
        </form>
    </div>
</div>
<!--  -->


<!-- Footer -->
<section class="text-center text-light p-4" style="background-color: #56627E;">
    <label for="footer">Created By</label><br>
    <i class="fa-brands fa-instagram">
        <a href="http://www.instagram.com/adityavikky" class="text-light" style="text-decoration: none;"> @adityavikky</a>
    </i>
</section>
<!--  -->