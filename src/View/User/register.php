<div class="container">
  <div class="logo"></div>
  <div class="title">My CINEMA</div>
  <div class="inputs">
    <form action="<?= BASE_URI ?>/registerAction" method="post">
      <label>EMAIL</label>
      <input type="email" name='email' />
      <label class="label2">PASSWORD</label>
      <input type="password" name='Password' />
      <label class="label2">FIRSTNAME</label>
      <input type="text" name='firstname' />
      <label class="label2">LASTNAME</label>
      <input type="text" name='lastname' />
      <label class="label2">BIRTHDATE</label>
      <input type="date" name='birthdate' />
      <label class="label2">ADRESS</label>
      <input type="text" name='address' />
      <label class="label2">ZIPCODE</label>
      <input type="text" name='zipcode' />
      <label class="label2">CITY</label>
      <input type="text" name='city' />
      <label class="label2">COUNTRY</label>
      <input type="text" name='country' />
      <button type="submit">REGISTER</button>
    </form>
    <span>Vous avez déjà un compte? <a class="text-black text-decoration-none" href="<?= BASE_URI ?>/login">Connectez-Vous</a></span>
    </form>
  </div>
</div>