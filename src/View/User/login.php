<!-- <h1>Connecting</h1>
<form action= "<?= BASE_URI ?>/loginPost" method="post">
<p>Email: <input type="email" name='Email'></p>
<p>Password: <input type="password" name='Pass'></p>
<input type="submit" value="Envoyer">
</form>
 -->
<div class="container">

  <div class="logo"></div>
  <div class="title">My CINEMA</div>
  <div class="inputs">
    <form action="<?= BASE_URI ?>/loginPost" method="post">
      <label>EMAIL</label>
      <input type="email" name='Email' />
      <label class="label2">PASSWORD</label>
      <input type="password" name='Pass' />
      <button type="submit">LOGIN</button>
      <span>Vous n'êtes pas encore inscrit? <a class="text-black text-decoration-none" href="<?= BASE_URI ?>/register">Inscrivez-Vous</a></span>
    </form>
    <!-- <div>
      <img src="./webroot/assets/kisspng-valparaiso-popcorn-festival-kettle-corn-shuttersto-popcorn-background-hd-png-transparent-5ab0aaa85b45b3.3934381415215274643739.png" alt="">
    </div> -->
  </div>
</div>