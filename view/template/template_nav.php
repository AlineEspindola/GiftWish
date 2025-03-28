<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/style_responsive.css">
    <link rel="shortcut icon" href="view/images/logoGift.png" type="image/x-icon">

    <title>GiftWish</title>
  </head>
  <body>
    <input type="hidden" id="checkerInvisible" name="" value="<?php if($search){ echo $search; } ?>">
    
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-light">
            <a href=""><img src="view/images/logoMedium.png" alt="Logo da GiftWish"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Contato</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://www.tabnews.com.br/AlineEspindola" target=blank >TabNews</a>
                        <a class="dropdown-item" href="https://github.com/AlineEspindola" target=blank>GitHub</a>
                    </li>
                </ul>

                <div class="d-flex align-items-center ml-2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="login nav-link" href="">Login</a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-success">Cadastro</button>
                </div>

            </div>
        </nav>

        <main>
            <?php require "view/pages/$page.php" ;?>
        </main>

    </div>

    <script src="view/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>