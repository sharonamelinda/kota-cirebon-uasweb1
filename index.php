<!DOCTYPE html>
<html>
    <head><title>Home - Kota Cirebon</title></head>
    <?php 
    include('header.php');
    ?>
    
    <body>
        <div class="container-fluid-md">
            <img src="img/index/crbn.png" class="header-bg">
        </div>

        <?php 
           include('navbar.php');
        ?>
        
        <section class="container-md" style="height: auto;">
            <div class="section__part">
            <!--<h1 class="my-3">WELCOME</h1>
            <div class="dropdown-divider"></div>-->
            <div class="row">
                <div class="col-lg-6 col-md-7" style="margin: 5% auto;">
                    <div class="crb">Kota Cirebon</div>
                    <div class="text-wrap welcome__head">
                        Salah satu kota yang berada di Provinsi Jawa Barat. 
                        Kota ini berada di Pesisir Utara Pulau Jawa atau dikenal dengan sebutan jalur pantura.
                        Kota ini disebut sebagai kota yang strategis karena kota 
                        inilah yang menjadi titik bertemunya jalur yang
                        menghubungkan kota <b>Jakarta - Cirebon - Semarang - Surabaya.</b>
                    </div>
                    <div class="text-wrap welcome__head">
                        Sebuah kota dengan daya tarik wisata yang cukup banyak. 
                        Mulai dari tempat bersejarah seperti keraton, Beragam macam makanan khasnya, 
                        dan juga kerajinan-kerajinan khas seperti batik yang menjadi tujuan orang-orang yang mengunjungi kota ini.
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <a><img class="map__image" src="img/index/map_cirebon.png" data-toggle="tooltip" title="Cirebon"></a>
                </div>
            </div>
            </div>
        </section>
        <br>
            
        <div class="container">
            <div class="info">Info</div>
            <div class="row my-3">
                <div class="col-md-4">
                    <img src="img/index/3.jpg" class="info-pict">
                    <div class="info_">
                        <div class="info-main">
                            <div class="info-title">Tentang</div>
                            <div class="info-isi">
                            Mewujudkan Kualitas Sumber Daya Manusia Kota Cirebon yang Berdaya Saing, Berbudaya, Unggul di Segala Bidang.
                            </div>
                            <a href="tentang.php">
                            <button class="info_more">Read More</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="img/index/2.jpg" class="info-pict">
                    <div class="info_">
                        <div class="info-main">
                            <div class="info-title">Pemerintahan</div>
                            <div class="info-isi">
                                Memiliki Struktur organisasi yang dibagi menjadi 2 lembaga, 
                                yaitu <b>lembaga Eksekutif</b> dan <b>lembaga Legislatif</b>.
                            </div>
                            <a href="pemerintahan.php">
                            <button class="info_more">Read More</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="img/index/1.jpg" class="info-pict">
                    <div class="info_">
                        <div class="info-main">
                            <div class="info-title">Sejarah</div>
                            <div class="info-isi">
                                Dengan adanya Struktur Pemerintahan dan Kerajaan-kerajaan di Cirebon yang 
                                memiliki banyak cerita sejarah di dalamnya.
                            </div>
                            <a href="sejarah.php">
                            <button class="info_more">Read More</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php 
            include('footer.php'); 
            include('top.php'); 
        ?>
    </div>
    </body>
</html>