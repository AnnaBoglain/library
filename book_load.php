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
                    <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Меню
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Запись</a></li>
                      <li><a class="dropdown-item" href="#">Портфолио</a></li>
                      <li><a class="dropdown-item" href="#">Прайс</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Войти</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav> 
    </header>
    <div class="row">
    <div class="col-md-10 offset-md-4">
    <form action="book_load_script.php" method="post" class="g-3 needs-validation" enctype = "multipart/form-data" novalidate>
         <div class="mb-3 col-5" style = "margin-top: 100px;" >
             <label for="formFile" class="form-label">Обложка книги</label>
             <input class="form-control" type="file" id="formFile" name = "img_book">
         </div>    
        
             <label for="name_book" class="form-label">Название книги</label>
             <input type="text" class="form-control" id="name_book" name = "name_book">
         
         <div class="col-md-5">
             <label for="author" class="form-label">Автор</label>
             <input type="text" class="form-control" id="author" name = "author">
         </div>
         <div class="col-md-5">
             <label for="jenre" class="form-label">Жанр</label>
             <input type="text" class="form-control" id="jenre" name = "jenre">
         </div>
         <div class="col-12">
             <button type="submit" class="btn btn-primary">Сохранить</button>
         </div>
    </form>
    </div>
    </div>
    
    
</body>
</html>