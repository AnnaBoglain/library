<?php
   
    require_once('db.php');

    $id_sql = "SELECT `id` FROM `users`"; 
    $result = mysqli_query($conn, $id_sql);
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];

    $book_sql = "SELECT `name_book` , `author`, `img_book`, `genre` FROM `books` WHERE `int_user` = ('$user_id')";
    $result_book = mysqli_query($conn, $book_sql);

    while ($arr_book = mysqli_fetch_array($result_book)) {
        echo '
        <div class="card" style="width: 20rem;">
            <img src="'.$arr_book['img_book'].'" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">'. $arr_book['name_book'] . '</h5>
                <h3 class="card-title">'. $arr_book['author'] . '</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                cards content.</p>
            </div>
        </div>
        ';
    }
 ?>        