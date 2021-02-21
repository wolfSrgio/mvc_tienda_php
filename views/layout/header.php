
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$url?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$url?>public/css/main.css">
    <link rel="stylesheet" href="<?=$url?>public/css/index.css">
    <link rel="stylesheet" href="<?=$url?>public/css/usuario.css">
    <title>tienda_mvc</title>
</head>
<body>
    <div class="container border">

            <!-- CABEZERA -->
            <header id="cabezera">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                   <div class='header__logo'>
                          <img src="<?=$url?>assets/logo_cabezera.jpg" alt="logo"
                         class='logo_cabezera'> 
                       
                   </div>
                    <a class="navbar-brand titulo-nav" href="#">ShoppingClick</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categorias
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Categoria 1</a>
                                    <a class="dropdown-item" href="#">Categoria 2</a>
                                    <a class="dropdown-item" href="#">Categoria 3</a>
                                    </div>
                            </li>
                            <li class="nav-item active  d-block d-md-none">
                                 <a class="nav-link" href="#usuario-section">Login</a>
                            </li>
                        </ul>
                     </div>
                </nav>
           </header>