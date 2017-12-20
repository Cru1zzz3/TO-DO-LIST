<!DOCTYPE html>
<html>
  <head>
    <title>login tic-tac-toe</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>

  <body>
<!--  <form action="auth.php">

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="login" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit">Login</button>
  </div>
</form> 
<?php
  if (isset($_GET["error"])){
    echo ('Неверные имя пользователя или пароль');
  } 
?>

-->
<form action="auth.php">  
    <div class="container">

      <form class="form-signin">
        <h2 align="center" class="form-signin-heading"> Войти в свой аккаунт </h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="inputLogin" name="login" class="form-control" placeholder="Введите логин" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" name="pass"   class="form-control" placeholder="Пароль" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit"> Войти </button>
      </form>

    </div>
</form>

<form action="registration.php"> <button type="submit"> Зарегестрироваться </button></form>

<?php
  if (isset($_GET["error"])){
    echo ('Неверные имя пользователя или пароль');
  } 
?>

  </body>
</html>