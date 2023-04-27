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

   <div class="container mt-5">
      <h3>Контактная форма</h3>
      <form action="check.php" method="post"><br>
         <input type="email" name="email" class="form-control" placeholder="Введите Email"><br>
         <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
         <button type="submit" name="send" class="btn btn-success">Отправить</button>
      </form>

   </div>

   <?php require "blocks/footer.php" ?>

</body>

</html>