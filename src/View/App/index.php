
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
<div class="ctr">
    <p class="Paragraphe1">Welcome to My Cinema</p>
    <img class="cine" src="./webroot/assets/felix-mooneeram-evlkOfkQ5rE-unsplash.jpg" alt="">
    
<ul class="NaVul1">
    <li class="NaVli"><a class="text-white text-decoration-none" href="#">Lorem ipsum</a></li>
    <li class="NaVli"><a class="text-white text-decoration-none" href="">Lorem ipsum</a></li>
    <li class="NaVli"><a id="inscription" class=" text-white text-decoration-none" href="">Lorem ipsum</a></li>
</ul>
</div>

</div>
<!-- <ul class="pagination">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul> -->

                        <!-- <div class="flexs">
                        <?php // On boucle sur tous les articles
                        foreach ($result as $value) { ?>
                     
                                <div class="text-white movie"><img class="soon" src="./webroot/assets/anika-mikkelson-dWYjy9zIiF8-unsplash.jpg" alt=""> <?= $value[
                                    'title'
                                ] ?></div>
                     
                       <?php } ?> 
                        </div>  -->
              


                