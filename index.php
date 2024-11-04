<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">

  </head>

  <body>

    <header>
        <h1 class="text-center p-3">Website dinamis</h1>
        
        <?php include "includes/navbar.php" ?>
    
    </header>
    <div class="container mt-4">
        <?php include "konten.php" ?>
    </div>
   
    <footer>
        <div class="fixed-bottom text-bg-dark p-2 text-center p-2 bg-info">
          M Iqbal Al Anshori @ <?= date("Y") ?>
        </div>
    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/jquery-3.7.1.js"></script>
  </body>
</html>
    <script src 