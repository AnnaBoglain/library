
<?php
    session_start();
    require_once('db.php');
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = md5($_POST['password']);
    $repeatpass = md5($_POST['repeatpassword']);

    if($pass === $repeatpass) {
        $sql = "INSERT INTO `users` (login, password, email) VALUES ('$login', '$pass', '$email')";
        $conn -> query($sql);
        header('Location: ../site');
        $_SESSION['message'] = "Регистрация прошла успешно!";
    } else {
        $_SESSION['message'] = 'Пароли не совпадают, введите повторно.';
        header('Location: ../site');
    }
    
?>
