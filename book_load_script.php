<?php
    session_start();
    require_once('db.php');
 
    $name_book = $_POST['name_book'];
    $author = $_POST['author'];
    $genre = $_POST['jenre'];
    
    print_r($_FILES);
   
    $path = 'upload_img/' . time() . $_FILES['img_book']['name'];
    $fileType = exif_imagetype($_FILES['img_book']['tmp_name']);
    $type = array(IMAGETYPE_JPEG, IMAGETYPE_PNG);
    if(!in_array($fileType, $type)){
        $_SESSION['mesager'] = 'Книга не добавлена! Картинка должна быть в формате PNG, JPEG!'
    } else {
        move_uploaded_file( $_FILES['img_book']['tmp_name'], $path);

        $id_sql = "SELECT `id` FROM `users`"; 
    

        $result = mysqli_query($conn, $id_sql);
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id'];
        $username = $row['login'];
        print_r($username);
    
        print_r($id);
    
        $sql = "INSERT INTO `books` (name_book, author, img_book, genre, int_user) VALUES ('$name_book', '$author', '$path' ,'$genre', '$user_id')";
        $conn -> query($sql);
        header('Location: ../site');
        
        $_SESSION['message'] = "Книга сохранена!";
        display_book($user_id, $conn);
    
    }
   

?>