<?php

    session_start();
    require_once 'db.php';

    $login = $_POST['log'];
    $password = md5($_POST['pass']);

    $chek_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if(mysqli_num_rows($chek_user) > 0) {
        header('Location: ../site');
        $_SESSION['message'] = "Вы вошли!";
    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../site');
    }

    $id_sql = "SELECT `login` FROM `users`"; 
    //$id =  $conn -> query($id_sql);

    $result = mysqli_query($conn, $id_sql);
    $row = mysqli_fetch_assoc($result);
    $username = $row['login'];
    $_SESSION['login'] = $username;
    echo "Hello,".$username;
?>