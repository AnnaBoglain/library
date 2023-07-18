<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

</head>
<body>
    <header id="header" class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">МояБиблиотека</a> 
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
              aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Главная</a>
                  </li>
                </ul>
                <?php
                      if (!$_SESSION['login']){
                        echo '<form class="d-flex">
                        <button type="button" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Вход</button>
                        <button type="button" class="btn btn-outline-danger ms-3" data-bs-toggle="modal" data-bs-target="#staticBackdropregister">Регистрация</button>
                      </form>';
                      } else {
                        
                      echo "Hello, ".$_SESSION['login'];
                        echo '<form class="d-flex" action="signout.php">
                        <button type="sumbit" class="btn btn-outline-danger ms-3">Выход</button> 
                        </form>';
                      }
                ?>
                <!--<form class="d-flex">
                    <button type="button" class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Вход</button>
                  <button type="button" class="btn btn-outline-danger ms-3" data-bs-toggle="modal" data-bs-target="#staticBackdropregister">Регистрация</button>
                </form>-->
              </div>
            </div>
          </nav> 
    </header>
    <!-- Modal -->
    <!-- Модальное окно для входа -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Вход</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          <form action="signin.php" method="post" class="row g-3 needs-validation" novalidate>
            <div class="row ms-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Login</label>
                <div class="col-sm-10">
                    <input type="login" class="form-control" id="inputEmail" name = "log" placeholder="log" required>
                </div>
            </div>
            <div class="row ms-3">
                <label for="inputPass" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail" name = "pass" placeholder="pass" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Войти</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

  <!-- Модальное окно для регистрации -->
  <div class="modal fade" id="staticBackdropregister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelregister" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabelregister">Регистрация</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          <form action="register.php" method="post" class="row g-3 needs-validation" novalidate>
            <div class="row ms-3">
                <label for="inputLogin" class="col-sm-3 col-form-label">Логин</label>
                <div class="col-sm-10 has-validation">
                    <input type="text" class="form-control" id="inputLogin" name="login" placeholder="login" required>
                    <div class="invalid-feedback">
                      Пожалуйста, заполните поле.
                    </div>
                </div>
            </div>
            <div class="row ms-3">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="email" required>
                    <div class="invalid-feedback">
                      Пожалуйста, заполните поле.
                    </div>
                </div>
            </div>
            <div class="row ms-3">
                <label for="inputPass" class="col-sm-3 col-form-label">Пароль</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" aria-labelledby = "passwordHelpBlock" name="password" placeholder="password" required>
                    <div class="invalid-feedback">
                      Пожалуйста, заполните поле.
                    </div>
                </div>
            </div>
            <div class="row ms-3">
                <label for="inputPass" class="col-sm-3 col-form-label">Пароль(повторно)</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputRepeatpassword" name="repeatpassword" placeholder="repeatpassword" required>
                    <div class="invalid-feedback">
                      Пожалуйста, заполните поле.
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
        </div>
      </div>
    </form>
    </div>
  </div>
  <!-- Modal -->
  <?php 
    if ($_SESSION['message']){
      echo '<div class="alert alert-info ms-3 col-3" role="alert" style = "margin-top: 100px;">
      <div class = "p-1">
      <p>' . $_SESSION['message'] . '</p>
      </div>
      </div>';
    }
    unset( $_SESSION['message']);
    
  ?>

<div class="cards">
<?php 
  require_once('display_book.php');
?>
</div>



      
        <p><a href="book_load.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">+Добавить новую книгу</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src = "script.js"></script>

   

</body>
</html>