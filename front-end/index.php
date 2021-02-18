<?php
$url="http://localhost/1_php/c_masterPHP/e_Proyecto_carrito/front-end/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$url?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$url?>public/css/main.css">
    <link rel="stylesheet" href="<?=$url?>public/css/index.css">
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
                                 <a class="nav-link" href="#usuario-section">Logeate</a>
                            </li>
                        </ul>
                     </div>
                </nav>
           </header>

            <!-- CUERPO -->
            <main>
                <div class="row">
                     <section  class="col-12 col-md-8 py-2">

                                <section  id='productos' class='productos_contenedor'>
                                         <?php  for ($i=0; $i < 4; $i++): ?>
                                         <article class='productos_article border'>
                                              <img src="<?=$url?>public/img/productos/hmgoepprod.jpeg" alt="">
                                              <h6 class='text-center'>Camiseta azul</h6>
                                              <p class='text-center text-primary m-0'>30 euros</p>
                                              <div class='text-center py-2'><a href="#" class='btn btn-success'>Comprar</a></div> 
                                         </article>  
                                         <?php  endfor; ?>                                  
                                </section>
                    </section>
                     <aside
                     id='usuario-section'
                     class="col-12  col-md-4 border py-2">

                         <section id='config_user' class='border'>
                             <article id='#login' class='p-2'>
                                    <h3 class='text-center my-1'>Identificate</h3>
                                    <form action='' method='post'>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-2 col-md-12 col-form-label">Email</label>
                                        <div class="col-10 col-md-12">
                                        <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-2  col-md-12 col-form-label">Password</label>
                                        <div class="col-10  col-md-12">
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class='text-center'>
                                    <button type="submit" class="btn btn-outline-primary">login</button>
                                    </div>
                                    </form>
                             </article>
                         </section>
                     
                         <section  id='menu_pedidos'  class='border mt-2'>
                                <article class='p-2'>
                                <p><a href="#" class='text-success'>Mis pedidos</a></p>  
                                <p><a href="#" class='text-success'>Gestionar Pedidos</a></p> 
                                <p><a href="#" class='text-success'>Gestionar Categorias</a></p>
                                    

                                </article>
                         </section>
                     
                        </aside>
                    
                </div>
            </main>

            <footer class='border text-center text-secondary p-3'>
                Desarrollado por @SrgioChuAlv &copy; <?=date('Y')?>
            </footer>

     
    </div>

    <script src="<?=$url?>public/js/jquery-3.5.1.min.js"></script>
    <script src="<?=$url?>./public/js/bootstrap.min.js"></script>
     <script src="<?=$url?>./public/js/popper.min.js"></script>
</body>
</html>