
<nav>
  <div class="nav">
    <ul class="NaVul">
      <li class="NaVli"><a class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#Modal2" href="#">Profil</a></li>
      <li class="NaVli"> <a class="text-white text-decoration-none" data-bs-toggle="modal" data-bs-target="#Modal" href="#">Update profil</a></li>
      <li class="NaVli"> <a class="text-white text-decoration-none" href="<?= BASE_URI ?>/logout">Logout</a></li>
      <li class="NaVli"><a class="text-white text-decoration-none" href="<?= BASE_URI ?>/delete">Delete profil</a></li>
    </ul>
  </div>
</nav>
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="Modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal">Modifier mon profil</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URI ?>/save" method="post">
          <label class="label2">PASSWORD</label>
          <input type="password" name='Password' />
          <label class="label2">ADRESS</label>
          <input type="text" name='address' value="<?= $_SESSION['address'] ?>" />
          <label class="label2">ZIPCODE</label>
          <input type="text" name='zipcode' value="<?= $_SESSION['zipcode'] ?>" />
          <label class="label2">CITY</label>
          <input type="text" name='city' value="<?= $_SESSION['city'] ?>" />
          <label class="label2">COUNTRY</label>
          <input type="text" name='country' value="<?= $_SESSION['country'] ?>" />
          <button type="submit" class="btn btn-primary">SAVE</button>
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="Modal2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal2">Voire mon profil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <pre>-EMAIL-</pre>
        <div><?= $_SESSION['email'] ?></div> <br>
        <pre>-ZIPCODE-</pre>
        <div><?= $_SESSION['zipcode'] ?></div><br>
        <pre>-ADRESS-</pre>
        <div><?= $_SESSION['address'] ?></div><br>
        <pre>-CITY-</pre>
        <div><?= $_SESSION['city'] ?></div><br>
        <pre>-COUNTRY-</pre>
        <div><?= $_SESSION['country'] ?></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="ctr">
  <img class="cine" src="./webroot/assets/paul-green-mln2ExJIkfc-unsplash.jpg" alt="">
</div>