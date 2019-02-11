<?php
    $vedi_Lista = $_GET['Lista']
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Frutta</title>
  </head>
  <body>

    <?php
        if ($vedi_lista == 'si') {
    ?>
        <ul>
            <?php
                $a = ['arancia', 'carota', 'banana', 'frutta', 'mandarino'];
                foreach ($a as $nome)
                {
                    print '<li>'.$nome.'</li>';
                }
            ?>
        </ul>
            <?php 
        }
            ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
  </body>
</html>