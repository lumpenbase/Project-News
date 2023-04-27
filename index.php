<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

   <?php require "blocks/header.php" ?>

   <div class="container ">

      <h3 class="mb-5">Новости</h3>

      <div class="d-flex flex-wrap">

         <?php
         include 'blocks/news.php';

         for ($i = 0; $i < count($newsText); $i++) : ?>

            <div class="mb-3 card shadow-sm">

               <div class="card-body">
                  <img class="img-thumbnail" src="img/<?php echo ($i + 1); ?>.jpg" alt="">
                  <p class="card-text"><?= $newsText[$i]; ?></p>
               </div>

            </div>

         <?php endfor; ?>
      </div>
   </div>

   <?php require "blocks/footer.php" ?>
</body>

</html>