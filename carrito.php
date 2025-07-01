<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeCob | Carrito</title>
   <script>
    function actualizarPrecio1() {
        let cantidad = document.getElementById("cantidad1").value;
        let precioBase = 20000; // Precio base del producto 
        let precioFinal = cantidad * precioBase;
        document.getElementById("precio1").innerText = "Precio total: $" + precioFinal;
    }

    function actualizarPrecio2() {
        let cantidad = document.getElementById("cantidad2").value;
        let precioBase = 100; // Precio base del producto 
        let precioFinal = cantidad * precioBase;
        document.getElementById("precio2").innerText = "Precio total: $" + precioFinal;
    }

    function actualizarPrecio3() {
        let cantidad = document.getElementById("cantidad3").value;
        let precioBase = 200; // Precio base del producto 
        let precioFinal = cantidad * precioBase;
        document.getElementById("precio3").innerText = "Precio total: $" + precioFinal;
    }

    function actualizarPrecio4() {
        let cantidad = document.getElementById("cantidad4").value;
        let precioBase = 50; // Precio base del producto 
        let precioFinal = cantidad * precioBase;
        document.getElementById("precio4").innerText = "Precio total: $" + precioFinal;
    }

    function actualizarPrecio5() {
        let cantidad = document.getElementById("cantidad5").value;
        let precioBase = 50; // Precio base del producto 
        let precioFinal = cantidad * precioBase;
        document.getElementById("precio5").innerText = "Precio total: $" + precioFinal;
    }

    function actualizarPrecio6() {
        let cantidad = document.getElementById("cantidad6").value;
        let precioBase = 50; // Precio base del producto 
        let precioFinal = cantidad * precioBase;
        document.getElementById("precio6").innerText = "Precio total: $" + precioFinal;
    }

    function actualizarPrecio7() {
        let cantidad = document.getElementById("cantidad7").value;
        let precioBase = 50; // Precio base del producto 
        let precioFinal = cantidad * precioBase;
        document.getElementById("precio7").innerText = "Precio total: $" + precioFinal;
    }

    function actualizarPrecio8() {
        let cantidad = document.getElementById("cantidad8").value;
        let precioBase = 50; // Precio base del producto 
        let precioFinal = cantidad * precioBase;
        document.getElementById("precio8").innerText = "Precio total: $" + precioFinal;
    }
    function actualizarPrecio9() {
        let cantidad = document.getElementById("cantidad9").value;
        let precioBase = 50; // Precio base del producto 
        let precioFinal = cantidad * precioBase;
        document.getElementById("precio9").innerText = "Precio total: $" + precioFinal;
    }

</script>
    <link rel="stylesheet" href="styleCarrito.css">
</head>
<body>
     <?php
session_start();

if (!isset($_SESSION['xuser'])) {
    // El usuario no ha iniciado sesión, redirigir a login
    header("Location: login.php"); // Cambia a tu archivo de inicio de sesión
    exit();
}
?>

    <header class="header">
      <div class="menu">
  <a class="logo">COFFECOB</a>
  <nav class="navbar">
    <ul>
        <li><a href="menu.php">Inicio</a></li>
      <li><a href="menu_sinlogeo.php">Cerrar Sesion</a></li>


      <li class="carrito-li">
  <i>
    <img src="img_shop/Carrito.png" class="Shoping">
    <div class="buy-card">
      <table class="nav-card">
        <thead>
          <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img src="img_shop/Cafe molido.jpg" alt="Producto" style="width:40px"></td>
            <td>Café molido</td>
            <td>$20000</td>
            <td>2</td>
          </tr>
        </tbody>
      </table>
      <div class="vaciar-btn-container">
        <button class="vaciar-carro">Vaciar carro</button>
      </div>
    </div>
  </i>
</li>


    </ul>
  </nav>
</div>
      <div class="header-content"  >
        <h1>CARRITO DE COMPRA</h1>
        <p>Bienvenido a tu carrito de compras</p>
      </div>
    </header>
    <div class="container">
        <nav>
        
        </nav>


        <h1>ARTICULOS</h1>


        <div class="grid">
    <div class="item">
        <img src="img_shop/Cafe molido.jpg">
        <div class="info">
            <h3>Cafe molido</h3>
            <br>
            <p>granos de café tostados que han sido triturados o molidos en
               polvo o partículas pequeñas, listas para ser preparadas en diferentes
               métodos de infusión </p>
            <br>   
            <p>Unidad:</p>
            <div class="precio">
                <p>$20000</p>
                
            </div>
            <p id="precio1">precio total: $</p>
            <label for="cantidad1">Cantidad:</label>
            <input type="number" id="cantidad1" min="1" max="99" value="1" onchange="actualizarPrecio1()"> <br>
            <br>
            <div style="text-align: center;">
             <button>Agregar al carrito</button>
            </div>
            
        </div>
    </div>
    <div class="item">
        <img src="img_shop/Cafe grano.jpg">
        <div class="info">
            <h3>Grano de Cafe</h3>
            <br>
            <p>Cobib no aporto en nada en este proyecto todos los creditos de esta maravillosa pagina son para
                Danniel David Garavito Toro
            </p>
            <br>
            <p>Unidad:</p>
            <div class="precio">
                <p>$100</p>

            </div>
            <p id="precio2">precio total: $</p>
            <label for="cantidad2">Cantidad:</label>
            <input type="number" id="cantidad2" min="1" max="99" value="1" onchange="actualizarPrecio2()"><br>  
            <br>
            <div style="text-align: center;">
             <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="img_shop/Cafe Cubierto de chocolate.jpg">
        <div class="info">
            <h3>ChocoCafe</h3>
            <br>
            <p>
                Paquete de Grano de cafe cubierto con chocolate 

            </p>
            <br>
            <p>Unidad:</p>
            <div class="precio">
                <p>$100</p>

            </div>
            <p id="precio3">precio total: $</p>
            <label for="cantidad3">Cantidad:</label>
            <input type="number" id="cantidad3" min="1" max="99" value="1" onchange="actualizarPrecio3()"><br> 
            
            <br>
            <div style="text-align: center;">
             <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="img_shop/Capuchinito.jpg">
        <div class="info">
            <h3>Capuchino</h3>
            <br>
            <p>Descripción del producto</p>
            <br>
            <div class="precio">
                <p>$100</p>
                
            </div>
            <p id="precio4">precio total: $</p>
            <label for="cantidad4">Cantidad:</label>
            <input type="number" id="cantidad4" min="1" max="99" value="1" onchange="actualizarPrecio4()"><br> 
            
            <br>
            <div style="text-align: center;">
             <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="img_shop/Latte.jpg">
        <div class="info">
            <h3>Latte Caliente</h3>
            <br>
            <p>Descripción del producto</p>
            <br>
            <div class="precio">
                <p>$100</p>
                
            </div>
            <p id="precio5">precio total: $</p>
            <label for="cantidad5">Cantidad:</label>
            <input type="number" id="cantidad5" min="1" max="99" value="1" onchange="actualizarPrecio5()"><br> 
            
            <br>
            <div style="text-align: center;">
             <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="img_shop/Tinto.jpg">
        <div class="info">
            <h3>Tinto</h3>
            <br>
            <p>Descripción del producto</p>
            <br>
            <div class="precio">
                <p>$100</p>
                
            </div>
            <p id="precio6">precio total: $</p>
            <label for="cantidad6">Cantidad:</label>
            <input type="number" id="cantidad6" min="1" max="99" value="1" onchange="actualizarPrecio6()"><br> 
            
            <br>
            <div style="text-align: center;">
             <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="img_shop/Cafetera de embolo.jpg">
        <div class="info">
            <h3>Cafetera de embolo</h3>
            <p>Descripción del producto</p>
            <div class="precio">
                <p>$100</p>
                
            </div>
            <p id="precio7">precio total: $</p>
            <label for="cantidad7">Cantidad:</label>
            <input type="number" id="cantidad7" min="1" max="99" value="1" onchange="actualizarPrecio7()"><br> 
            
            <br>
            <div style="text-align: center;">
             <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="img_shop/Cafetera.webp">
        <div class="info">
            <h3>Cafetera Tradicional</h3>
            <p>Descripción del producto</p>
            <div class="precio">
                <p>$100</p>
                
            </div>
            <p id="precio8">precio total: $</p>
            <label for="cantidad8">Cantidad:</label>
            <input type="number" id="cantidad8" min="1" max="99" value="1" onchange="actualizarPrecio8()"><br> 
            
            <br>
            <div style="text-align: center;">
             <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="img_shop/Cafetera Italiana.webp">
        <div class="info">
            <h3>Cafetera Italiana</h3>
            <p>Descripción del producto</p>
            <div class="precio">
                <p>$100</p>
                
            </div>
            <p id="precio9">precio total: $</p>
            <label for="cantidad9">Cantidad:</label>
            <input type="number" id="cantidad9" min="1" max="99" value="1" onchange="actualizarPrecio9()"><br> 
            
            <br>
            <div style="text-align: center;">
             <button>Agregar al carrito</button>
            </div>
        </div>
    </div>
</div>


<script>
  const carrito = [];
  const carritoContenedor = document.querySelector(".buy-card tbody");

  const botonesAgregar = document.querySelectorAll("button");

  botonesAgregar.forEach((boton, index) => {
    boton.addEventListener("click", () => {
      const item = boton.closest(".item");
      const nombre = item.querySelector("h3").textContent;
      const precioTexto = item.querySelector(".precio p").textContent;
      const precio = parseFloat(precioTexto.replace("$", ""));
      const cantidadInput = item.querySelector("input[type='number']");
      const cantidad = parseInt(cantidadInput.value);

      // Verificar si el producto ya está en el carrito
      const existente = carrito.find(p => p.nombre === nombre);

      if (existente) {
        existente.cantidad += cantidad;
      } else {
        carrito.push({ nombre, precio, cantidad });
      }

      mostrarCarrito();
    });
  });

 function mostrarCarrito() {
  carritoContenedor.innerHTML = "";

  // liminar el total anterior
  const totalViejo = document.querySelector(".total-general");
  if (totalViejo) {
    totalViejo.remove();
  }

  carrito.forEach(producto => {
    const fila = document.createElement("tr");
    fila.innerHTML = `
      <td><img src="img_shop/Cafe molido.jpg" style="width:40px"></td>
      <td>${producto.nombre}</td>
      <td>$${producto.precio}</td>
      <td>${producto.cantidad}</td>
    `;
    carritoContenedor.appendChild(fila);
  });

  const total = carrito.reduce((sum, p) => sum + (p.precio * p.cantidad), 0);

  const totalElemento = document.createElement("p");
  totalElemento.classList.add("total-general");
  totalElemento.style.textAlign = "right";
  totalElemento.innerHTML = `<strong>Total: $${total}</strong>`;

  document.querySelector(".buy-card").appendChild(totalElemento);
}


  

  // vaciar el carrito
  document.querySelector(".vaciar-carro").addEventListener("click", () => {
    carrito.length = 0; // poner el array en 0
    mostrarCarrito();   // mostrar el carrito vacío
  });



</script>

</body>
</html>