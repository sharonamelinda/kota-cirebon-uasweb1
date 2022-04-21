<!DOCTYPE html>
<html>
    <head>
        <title>Pemerintahan - Kota Cirebon</title>
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
            <h1 class="p_title">Pemerintahan</h1><br>
            <div class="text-center pmrnth">
                <h5 class="pemerintah_">Legislatif</h5>
                <img class="pemerintah_img" src="img/legislatif.png">
            </div>
            
            <div class="text-center pmrnth">
                <h5 class="pemerintah_">Eksekutif</h5>
                <img class="pemerintah_img" src="img/eksekutif.png">
            </div>
        </div>
        
        <nav aria-label="Page navigation example" style="margin: 20px 0;">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="tentang.php" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="tentang.php">1</a></li>
                <li class="page-item disabled"><a class="page-link" href="pemerintahan.php">2</a></li>
                <li class="page-item"><a class="page-link" href="sejarah.php">3</a></li>
                <li class="page-item">
                <a class="page-link" href="sejarah.php">Next</a>
              </li>
            </ul>
          </nav>

        <?php  
            include('footer.php'); 
            include('top.php'); 
        ?>

        
    </body>
</html>