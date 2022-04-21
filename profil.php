<!DOCTYPE html>
<html>
    <head>
        <title>Profil Pengembang</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include('navbar.php'); ?>
        
        <section class="container-fluid main__">
            <div class="main-profile mx-auto d-block text-center">
                <div class="main-profile-image">
                    <img src="img/logo/woman.svg" class="image-set">
                </div>
                <div class="main-profile-data mt-3 mx-auto">
                    <div class="profile-name">Sharon Amelinda</div>
                    <div class="profile-job">Informatika 2019</div>
                    <div class="profile-loc">Universitas Kristen Krida Wacana</div><br>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="keterangan">
                <div class="get">
                    Get To Know Me More</div>
                <hr>
                <div class="row" style="margin: 20px;">
                    <div class="col-md-4">
                        <div class="box">
                            <img src="img/logo/outline_location_on_white_24dp.png" class="icon">
                            <div class="isi-profil">
                                Cirebon<br>
                                Indonesia
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="box">
                            <img src="img/logo/outline_smartphone_white_24dp.png" class="icon">
                            <div class="isi-profil">
                                +62 8211 2791 841<br>
                                +62 8586 4292 554
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="box">
                            <img src="img/logo/outline_mail_white_24dp.png" class="icon">
                            <div class="isi-profil">
                                sharon.412019008@civitas.ukrida.ac.id
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="container-fluid-md message-sub">
            <div class="container">
                <div class="message">Send Me A Message</div>
                <div class="row inputs" id="form">
                    <div class="col-md-4">
                        <input id="name-input" type="text" name="name" placeholder="Enter Your Name">
                    </div>
                    <div class="col-md-8">
                        <input id="message-input" type="text" name="message" placeholder="Your Message">
                    </div>
                </div>
                    <button id="send-button">Send</button><br>
            </div>
        </div>

    <?php include('footer.php'); ?>
    <?php include('top.php'); ?>

        
    </body>
</html>