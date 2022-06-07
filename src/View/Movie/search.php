


<nav >
    <div class="d-flex justify-content-center align-items-center  flex-row pt-5 pb-5">
    <div class="col-6 ">
        
    <!-- <input class="col-12 d-flex" type="search" placeholder="Search movies" > -->
    <form method="POST" action ="<?= BASE_URI ?>/search" >
   <input class="col-12 d-flex" type="search" name="search" placeholder="Search Movie">
  </form>
    <!-- <i class="fa-solid fa-magnifying-glass"></i>-->
    </div>
    
<div>
    <ul class="NaVul">
    <li class="NaVli"> <a class="text-white text-decoration-none" href=" <?= BASE_URI ?>/login">Connection</a></li>
    <li class="NaVli"><a class="text-white text-decoration-none" href=" <?= BASE_URI ?>/register">S'inscrire</a></li>
    </ul>
    </div>
</nav>

<span class="text-white"> Vous avez recherchez : <?= $_POST[
    'search'
] ?></span> <br>
<span class="text-white"> Nous avons trouver <?= count(
    $result_Movie
) ?> résultats pour votre recherche</span>

<div class="flexs";>
<?php foreach ($result_Movie as $movie) { ?>

    <div class="text-white movie"><img class="soon" src="./webroot/assets/anika-mikkelson-dWYjy9zIiF8-unsplash.jpg" alt=""> <?= $movie[
        'title'
    ] ?></div>
    <?php } ?>

</div>