<!DOCTYPE html>
<html>
    <head>
        <title>Sejarah - Kota Cirebon</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-fluid-md">
            <img src="img/historical/sejarah-kota-cirebon.jpg" class="header-bg">
        </div>

        <?php include('navbar.php'); ?>
        
        <div class="container my-3" style="height: auto;">
            <!--Sejarah Pemerintahan starts here-->
            <div class="sejarah">
                <div class="sejarah-title">Sejarah Pemerintahan</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="sejarah-main">
                            <div class="tahun">1270 -1910</div>
                            <div class="isi-sejarah">
                            Pada abad XIII Kota Cirebon ditandai dengan kehidupan yang masih 
                            tradisional dan pada tahun 1479 berkembang pesat menjadi pusat 
                            penyebaran dan Kerajaan Islam terutama di wilayah Jawa Barat. 
                            Kemudian setelah penjajah Belanda masuk, dibangunlah jaringan 
                            jalan raya darat dan kereta api sehingga mempengaruhi perkembangan 
                            industri dan perdagangan.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sejarah-main">
                            <div class="tahun">1910-1937</div>
                            <div class="isi-sejarah">
                            Pada periode ini Kota Cirebon dishkan menjadi Gemeente Cheirebon 
                            dengan luas 1.100 Hektar dan berpenduduk 20.000 jiwa 
                            (Stlb. 1906 No. 122 dan Stlb. 1926 No. 370).
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="sejarah-main">
                            <div class="tahun">1937-1967</div>
                            <div class="isi-sejarah">
                            Tahun 1942 Kota Cirebon diperluas menjadi 2.450 hektar dan tahun 1957 status 
                            pemerintahannya menjadi Kota Praja dengan luas 3.300 hektar, 
                            setelah ditetapkan menjadi Kotamadya tahun 1965 luas wilayahnya menjadi 3.600 hektar.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sejarah-main">
                            <div class="tahun">1967-Sekarang</div>
                            <div class="isi-sejarah">
                            Wilayah Kota Cirebon sampai saat ini seluas 3.735,82 hektar. 
                            Terbagi dalam 5 kecamatan dan 22 kelurahan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!--ends here-->

        <div class="container-fluid" style="background-color: #d9d9d9;">
            <div class="container">
                <div class="centering">
                    <div class="sejarah-title2">Sejarah Kerajaan</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="sejarah-main">
                            <video width="100%" controls>
                                <source src="img/vid/sejarah_kerajaan.mp4" type="video/mp4">
                                Your browser does not support HTML video.
                            </video>
                            <div><i>sources: 
                                <a href="https://youtu.be/cTAU1RvB7u0" target="_blank" style="color: #3c6e71;">youtube/sejarah-kerajaan</a></i></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="isi-sejarah-2">
                            <b>Kerajaan Cirebon</b> merupakan sebuah kerajaan bercorak Islam 
                            ternama yang berasal dari Jawa Barat. Kesultanan Cirebon 
                            berdiri pada abad ke-15 dan 16 Masehi. Kesultanan Cirebon 
                            juga merupakan pangkalan penting yang menghubungkan jalur 
                            perdagangan antar pulau. Kesultanan Cirebon berlokasi di 
                            pantai utara pulau Jawa yang menjadi perbatasan antara 
                            wilayah Jawa Tengah dan Jawa Barat, ini membuat Kesultanan 
                            Cirebon menjadi pelabuhan sekaligus “jembatan” antara 2 
                            kebudayaan, yaitu budaya Jawa dan Sunda.
                            </div>
                            <button class="btn-history">Read More &rarr;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav aria-label="Page navigation example" style="margin: 30px 0 20px 0;">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="pemerintahan.php" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="tentang.php">1</a></li>
                <li class="page-item"><a class="page-link" href="pemerintahan.php">2</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>

        <?php 
            include('footer.php'); 
            include('top.php'); 
        ?>
    </body>
</html>