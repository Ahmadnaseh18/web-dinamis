<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!--bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
    
    <!-- css-->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
      html, body {
        height: 100%;
        display: flex;
        flex-direction: column;
        margin: 0;
      }

      body > * {
        flex-shrink: 0;
      }

      main {
        flex-grow: 1;
      }
    </style>

  </head>

  <body>

    <header>
      <h1 class="text-center p-3">Membuat website dinamis</h1>
    </header>
    
      <!-- Menu --> 
      <?php
     include "includes/navbar.php"
      ?>
      <!-- Menu -->

      <!-- Konten -->
    <div class="container mt-3">
          <?php include "konten.php"?>
    </div>
      <!-- Konten -->

    <footer class="bg-dark p-3 mt-auto ">
      <div class="text-light text-center">
              pemrogramman web 1 UTS @ <?= date ("Y") ?>
      </div>
    </footer>

    <script src="assets/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script> new DataTable('#example'); </script>

  </body>
</html>