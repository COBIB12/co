<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COFFECOB</title>
    <link rel="stylesheet" href="Style.css" />
  </head>
  <body>
   <?php
session_start();

if (!isset($_SESSION['xuser'])) {
    // El usuario no ha iniciado sesión, redirigir a login
    header("Location: UserRegisterExitoso.html"); // Cambia a tu archivo de inicio de sesión
    exit();
}
?>
    <?php
    
        $usuario = isset($_SESSION['xuser']) ? $_SESSION['xuser'] : 'Invitado';
    ?>
    <header class="header">
      <div class="menu">
        <a  class="logo"><?php echo htmlspecialchars($usuario); ?></a>
        <input type="checkbox" id="menu" />
        <label for="menu">
          <img src="Images/menu.png" class="menu-icon" alt="menu" />
        </label>
        <nav class="navbar">
          <ul>

            <li><a href="borrar.php">Borrar Registro</a></li>
            <li><a href="mod_reg.php">Modificar Registro</a></li>
            <li><a href="cerrar.php">Cerrar Sesion</a></li>
            <form
          </ul>
        </nav>
      </div>
      <div class="header-content">
        <h1>COFFECOB</h1>
        <p>
          Disfruta de nuestras recetas de crema y té para tus bebidas favoritas.
          Encuentra las mejores recetas para todo tipo de persona, desde las más
          simples a las más elaboradas.                                                   
        </p>
        <a href="carrito2.php" class="Boton">¡COMPRA YA!</a>
      </div>
    </header>

    <section class="cafes">
      <image class="cafe-img" src="images/bg2.png" alt="" />
      <div class="cafe-content">
        <h2>PRODUCTOS</h2>
        <p class="txt-p">
          En nuestra tienda, te invitamos a descubrir una deliciosa variedad de cafés seleccionados con esmero para satisfacer 
          todos los gustos. Desde suaves y aromáticos cafés de origen único hasta intensos y cremosos blends, cada taza está elaborada 
          con granos de la más alta calidad, cultivados en las mejores regiones productoras del mundo. Ya sea que prefieras un espresso
          robusto, un cappuccino suave o un café filtrado lleno de matices, tenemos el café perfecto para cada momento. Ven y déjate
          sorprender por los sabores, aromas y texturas que solo un buen café puede ofrecer. ¡El placer de una excelente taza te está esperando!
        </p>
        <br>
        <br>
        <div class="coffe-group"> <!-- Cambié "coffe-groupe" a "coffe-group" -->
          <div class="coffe-1">
            <img src="images/editsvergas.jpg" alt="" class="foto-1" />
            <br>
            <br>
            <h3>Crema de cafe</h3>
            <p>
              Dejate conquistar con el aroma de nuestro grano de cafe 
            </p>
            <br>
            <br>
            <a href="carrito2.php" class="Boton">COMPRAR</a>
          </div>
        

          <div class="coffe-1">
            <img src="images/grano.jpg" alt="" class="foto-2" />
            <br>
            <br>
            <h3>Granos de cafe</h3>
            <p>
              Construye un cafe perfecto para tus bebidas favoritas,<br> utilizando la mejor
              materia prima y sabores.
            </p>
            <br>
            <a href="carrito2.php" class="Boton">COMPRAR</a>
          </div>
      
          <div class="coffe-1">
            <img src="images/cafetera.jpg" alt="" class="foto-3" />
            <br>
            <br>
            <h3>Cafeteras</h3>
            <p>
              No te quedes sin tu taza de cafe en las mañanas!
            </p>
            <br>
            <br>
            <a href="carrito2.php" class="Boton">COMPRAR</a> <br>
          </div>
        </div>
        

    </section>

    <main class="servicios">
      <div class="contenido-servicios">
        <br><h2>Nuestros Servicios</h2>
        <div class="servicio-grupo">
          <div class="servicios-1">
            <img src="images/i1.svg" alt="" />
            <h3>Placer</h3>
          </div>
        
          <div class="servicios-1">
            <img src="images/i2.svg" alt="" />
            <h3>Gusto</h3>
          </div>
        
          <div class="servicios-1">
            <img src="images/i3.svg" alt="" />
            <h3>Aroma y Sabor</h3>
          </div>
          
        </div>
        <p>
          En nuestra tienda, no solo encontrarás una deliciosa variedad de cafés cuidadosamente seleccionados, sino también un ambiente
          pensado para brindarte una experiencia única. Ofrecemos desde suaves y aromáticos cafés de origen único hasta intensos blends,
          todos elaborados con granos de la más alta calidad. Pero eso no es todo: además de disfrutar de tu café favorito, podrás aprovechar 
          nuestros servicios especiales. Ya sea que necesites un espacio cómodo para trabajar o relajarte, o prefieras disfrutar de tu bebida
          en casa con nuestros servicios de entrega, nos aseguramos de que cada visita sea una experiencia memorable. También ofrecemos asesoramiento 
          personalizado para elegir el café ideal, y si eres amante de la preparación en casa, contamos con productos y accesorios de alta gama. 
          ¡Ven, siéntete como en casa y déjate cautivar por el sabor y el servicio que te mereces!
        </p>
      </div>  
    </main>

    <section class="general">
      
      <div class="general-1">
        <h2>MISION</h2>
        <p>
       Crear momentos memorables a través de bebidas únicas, inspiradas
        en la creatividad, el sabor y la pasión por lo artesanal
        </p>

      </div>
      <div class="general-2"></div>
    </section>  

    <section class="general">
      <div class="general-3"></div>
      <div class="general-1">
        <h2>VISION</h2>
        <p>
          Convertirnos en la marca favorita de quienes buscan autenticidad,
           comunidad y experiencias en cada sorbo.
        </p>

      </div>
    </section>  

    <section class="blog">
      <br/><br/>
  <h2>CREADORES</h2>
  <div class="contenido-blog">
    <div class="blog-1">
      <img src="images/Creador Original.JPG" alt="Danniel David Garavito Toro" class="blog-img">
      <h3>Danniel David Garavito Toro</h3>
      <p>
        Creador de la página CoffeCob, amante del café y la programación.
      </p>
    </div>
    <div class="blog-1">
      <img class="blog-img"  src="images/blogB.jpg" alt="Cobi Brayan Cuero Ballesteros" >
      <h3>Cobe Brayan Cuero Ballesteros</h3>
      <p>
        Desarrollador principal del backend, apasionado por la tecnología.
      </p>
    </div>
  </div>
</section>

    <section id="info">
      <hr />
      <footer>
        <p style="text-align: center;">
          (c) Todos los derechos reservados - Danniel D Garavito T  and Cobe Ballesteros 2025
          <br />
          Diseñado por
          <a href="https://www.instagram.com/dav.toro/?hl=es"> Danniel David Garavito Toro </a> and <a href="https://www.instagram.com/_cobib_/?hl=es">Cobe Brayan Cuero Ballesteros</a> 
        </p>
      </footer>
    </section>
  </body>
</html>