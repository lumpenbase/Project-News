 <header class="navbar navbar-expand-lg navbar-light bg-light">

    <nav class="container">

       <a class="navbar-brand" href="#">
          <img src="img/0.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top">
       </a>

       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse ms-5" id="navbarContent">

          <ul class="nav nav-item nav-pills navbar-nav">
             <li class="new-item"><a href="#" class="nav-link active text-white">Новости города</a></li>
             <li class="new-item"><a href="#" class="nav-link text-black">Жизнь города</a></li>
             <li class="new-item"><a href="#" class="nav-link text-black">Репортажи и интервью</a></li>
             <li class="new-item"><a href="#" class="nav-link text-black">Рекламма</a></li>
             <li class="new-item"><a href="/about.php" class="nav-link text-black ms-4">Контакты</a></li>

             <li class="new-item">

             </li>
          </ul>

          <form action="" class="d-flex ms-auto p-2">
             <input type="search" placeholder="Поиск..." class="form-control mr-2">
             <button class="btn ms-2 btn-outline-success">Поиск</button>
          </form>


          <!-- печенье -->


          <!-- ?php
            if (isset($_COOKIE['user']) && $_COOKIE['user'] == 'true') :
            ?> -->


          <?php
            if ($_COOKIE = ['user'] == 'true') :
            ?>

             <div class="text-center ms-5">
                <a href="/auth.php" class="btn btn-outline-primary me-1">Личный кабинет</a>
             </div>
          <?php else : ?>
             <div class="text-center ms-5">
                <a href="/auth.php" class="btn btn-outline-primary me-1">Войти</a>
                <!-- <button type="button" class="btn btn-primary">Регистрация</button> -->
             </div>
          <?php endif; ?>

       </div>

    </nav>

 </header>