<?php
 $url="http://localhost/1_php/c_masterPHP/e_Proyecto_carrito/front-end/";
?>

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
                  
