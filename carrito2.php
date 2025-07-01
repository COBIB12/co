<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CoffeeCob | Carrito</title>
  <link rel="stylesheet" href="styleCarrito.css">
  <script>
// Función para actualizar el precio total 
function actualizarPrecio(id) {
  const cantidad = document.getElementById("cantidad" + id).value;
  const precioTexto = document.querySelector(`#cantidad${id}`).closest(".info").querySelector(".precio p").innerText;
  const precioBase = parseFloat(precioTexto.replace(/\$|\.|,/g, ""));
  const precioFinal = cantidad * precioBase;
  document.getElementById("precio" + id).innerText = "Precio total: $" + precioFinal.toLocaleString();
}

//mostrar los precios al cargar la página
window.addEventListener("DOMContentLoaded", () => {
  for (let i = 1; i <= 9; i++) {
    actualizarPrecio(i);
  }
});

  </script>
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION['xuser'])) {
    header("Location: login.php");
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
              <img src="img_shop/Carrito.png" class="Shoping" />
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
                  <tbody></tbody>
                </table>
                <div class="vaciar-btn-container">
                  <button class="vaciar-carro">Vaciar carro</button>
                  <button class="comprar-carro" onclick="window.location.href='https://chat.whatsapp.com/ERmU7RFQp4Z5tpDHlPJUjL'">Comprar</button>
                </div>
              </div>
            </i>
          </li>
        </ul>
      </nav>
    </div>
    <div class="header-content">
      <h1>CARRITO DE COMPRA</h1>

    </div>
  </header>
  <h1>ARTICULOS</h1>
  <div class="grid">

    <!-- Cafes molidos -->
    <div class="container">
      <h1>GRANO</h1>
      <div class="grid">
        <!-- 1 -->
        <div class="item">
          <img src="img_shop/Cafe molido.jpg">
          <div class="info">
            <h3>Cafe molido</h3>
            <p>Disfruta el aroma y sabor intenso del café recién molido, listo para preparar fácilmente en casa. Ideal para
              quienes valoran una taza fuerte y llena de carácter.</p>
            <div class="precio">
              <p>$20.000</p>
            </div>
            <p id="precio1">Precio total: $</p>
            <label for="cantidad1">Cantidad:</label>
            <input type="number" id="cantidad1" value="1" min="1" max="99" onchange="actualizarPrecio(1)" />
            <br> <br>
            <div style="text-align: center;"><button>Agregar al carrito</button></div>
          </div>
        </div>

        <!-- 2 -->
        <div class="item">
          <img src="img_shop/Cafe grano.jpg">
          <div class="info">
            <h3>Grano de Cafe</h3>
            <p>Café 100% en grano para quienes prefieren molerlo al instante y obtener la frescura máxima. Perfecto para amantes
              del café artesanal y de alta calidad.</p>
            <div class="precio">
              <p>$15.000</p>
            </div>
            <p id="precio2">Precio total: $</p>
            <label for="cantidad2">Cantidad:</label>
            <input type="number" id="cantidad2" value="1" min="1" max="99" onchange="actualizarPrecio(2)" />
            <br> <br>
            <div style="text-align: center;"><button>Agregar al carrito</button></div>
          </div>
        </div>

        <!--  3 -->
        <div class="item">
          <img src="img_shop/Cafe Cubierto de chocolate.jpg">
          <div class="info">
            <h3>ChocoCafe</h3>
            <p>La fusión perfecta entre el sabor profundo del café y la dulzura del chocolate. Una bebida reconfortante, ideal para
              momentos de antojo o tardes frías.</p>
            <div class="precio">
              <p>$26.000</p>
            </div>
            <p id="precio3">Precio total: $</p>
            <label for="cantidad3">Cantidad:</label>
            <input type="number" id="cantidad3" value="1" min="1" max="99" onchange="actualizarPrecio(3)" />
            <br> <br>
            <div style="text-align: center;"><button>Agregar al carrito</button></div>
          </div>
        </div>
        <!-- bebidas -->
        <div class="container">
          <h1> BEBIDAS </h1>
          <div class="grid">

            <!-- 4 -->
            <div class="item">
              <img src="img_shop/Capuchinito.jpg">
              <div class="info">
                <h3>Capuchino</h3>
                <p>Cremoso, espumoso y lleno de sabor. Nuestro capuchino te brinda la experiencia de cafetería desde la comodidad de tu casa.
                  Solo agrega agua o leche y disfruta.</p>
                <div class="precio">
                  <p>$8.000</p>
                </div>
                <p id="precio4">Precio total: $</p>
                <label for="cantidad4">Cantidad:</label>
                <input type="number" id="cantidad4" value="1" min="1" max="99" onchange="actualizarPrecio(4)" />
                <br> <br>
                <div style="text-align: center;"><button>Agregar al carrito</button></div>
              </div>
            </div>

            <!-- 5 -->
            <div class="item">
              <img src="img_shop/Latte.jpg">
              <div class="info">
                <h3>Latte Caliente</h3>
                <p>Suave, con un toque de leche y café perfectamente equilibrado. Un latte delicioso y reconfortante que convierte cualquier
                  momento en una pausa especial.</p>
                <div class="precio">
                  <p>$9.000</p>
                </div>
                <p id="precio5">Precio total: $</p>
                <label for="cantidad5">Cantidad:</label>
                <input type="number" id="cantidad5" value="1" min="1" max="99" onchange="actualizarPrecio(5)" />
                <br> <br>
                <div style="text-align: center;"><button>Agregar al carrito</button></div>
              </div>
            </div>



            <!-- 6 -->
            <div class="item">
              <img src="img_shop/Tinto.jpg">
              <div class="info">
                <h3>Tinto</h3>
                <p>El clásico colombiano, cargado de tradición. Un tinto fuerte, aromático y caliente que despierta tus sentidos y te acompaña en
                  cualquier momento del día.</p>
                <div class="precio">
                  <p>$4.000</p>
                </div>
                <p id="precio6">Precio total: $</p>
                <label for="cantidad6">Cantidad:</label>
                <input type="number" id="cantidad6" value="1" min="1" max="99" onchange="actualizarPrecio(6)" />
                <br> <br>
                <div style="text-align: center;"><button>Agregar al carrito</button></div>
              </div>
            </div>


            <!-- Cafeteras -->

            <div class="container">
              <h1> CAFETERAS </h1>
              <div class="grid">

                <!-- 7 -->
                <div class="item">
                  <img src="img_shop/Cafetera de embolo.jpg">
                  <div class="info">
                    <h3>Cafetera de embolo</h3>
                    <p>Extrae lo mejor del café con esta cafetera de émbolo. Ideal para quienes buscan un método artesanal y sabroso, sin filtros ni electricidad.</p>
                    <div class="precio">
                      <p>$50.000</p>
                    </div>
                    <p id="precio7">Precio total: $</p>
                    <label for="cantidad7">Cantidad:</label>
                    <input type="number" id="cantidad7" value="1" min="1" max="99" onchange="actualizarPrecio(7)" />
                    <br> <br>
                    <div style="text-align: center;"><button>Agregar al carrito</button></div>
                  </div>
                </div>

                <!-- 8 -->
                <div class="item">
                  <img src="img_shop/Cafetera.webp">
                  <div class="info">
                    <h3>Cafetera Tradicional</h3>
                    <p>La de toda la vida: fácil de usar, confiable y perfecta para preparar café en cantidad. Elige lo clásico y nunca fallarás con una buena taza.</p>
                    <div class="precio">
                      <p>$80.000</p>
                    </div>
                    <p id="precio8">Precio total: $</p>
                    <label for="cantidad8">Cantidad:</label>
                    <input type="number" id="cantidad8" value="1" min="1" max="99" onchange="actualizarPrecio(8)" />
                    <br> <br>
                    <div style="text-align: center;"><button>Agregar al carrito</button></div>
                  </div>
                </div>

                <!-- 9 -->
                <div class="item">
                  <img src="img_shop/Cafetera Italiana.webp">
                  <div class="info">
                    <h3>Cafetera Italiana</h3>
                    <br> <br>
                    <p>Auténtico sabor italiano en cada taza. La cafetera moka resalta la intensidad del café y es perfecta para quienes disfrutan de un espresso casero.</p>
                    <div class="precio">
                      <p>$150.000</p>
                    </div>
                    <p id="precio9">Precio total: $</p>
                    <label for="cantidad9">Cantidad:</label>
                    <input type="number" id="cantidad9" value="1" min="1" max="99" onchange="actualizarPrecio(9)" />
                    <br> <br>
                    <div style="text-align: center;"><button>Agregar al carrito</button></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  <script>
    const carrito = [];
    const carritoContenedor = document.querySelector(".buy-card tbody");

    const botonesAgregar = document.querySelectorAll(".item button");  // Selecciona todos los botones "Agregar al carrito"

    botonesAgregar.forEach(boton => {
      boton.addEventListener("click", () => {
        const item = boton.closest(".item"); // Busca el contenedor del producto actual

        const nombre = item.querySelector("h3").textContent;// Obtiene el nombre del producto
        const precioTexto = item.querySelector(".precio p").textContent; // Extrae el texto del precio
        const precio = parseFloat(precioTexto.replace(/\$|\.|,/g, "")); // Convierte el precio a número eliminando símbolos y separadores

        const cantidadInput = item.querySelector("input[type='number']");// Selecciona el input de cantidad
        const cantidad = parseInt(cantidadInput.value); // Convierte la cantidad a número entero

        const imagenSrc = item.querySelector("img").getAttribute("src");// Obtiene la URL de la imagen del producto

        // Verifica si el producto ya existe en el carrito
        const existente = carrito.find(p => p.nombre === nombre);
        // Si existe, actualiza la cantidad; si no, lo agrega como nuevo producto
        if (existente) {
          existente.cantidad += cantidad;
        } else {
          carrito.push({
            nombre,
            precio,
            cantidad,
            imagen: imagenSrc
          });
        }

        mostrarCarrito();
      });
    });
    // Función para mostrar el carrito
    function mostrarCarrito() {
      carritoContenedor.innerHTML = "";

      const totalViejo = document.querySelector(".total-general");
      if (totalViejo) totalViejo.remove();

      carrito.forEach(producto => {
        const fila = document.createElement("tr");
        fila.innerHTML = `
          <td><img src="${producto.imagen}" style="width:40px" /></td>
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
      totalElemento.innerHTML = `<strong>Total: $${total.toLocaleString()}</strong>`;
      document.querySelector(".buy-card").appendChild(totalElemento);
    }
    // Evento para vaciar el carrito
    document.querySelector(".vaciar-carro").addEventListener("click", () => {
      carrito.length = 0;
      mostrarCarrito();
    });
  </script>



  <section class="infoSena">
    <hr />
    <footer>
      <p style="text-align: center;">
        (c) Todos los derechos reservados - Danniel D Garavito T and Cobe Ballesteros 2025
        <br />
        Diseñado por
        <a href="https://www.instagram.com/dav.toro/?hl=es">Danniel David Garavito Toro</a> and
        <a href="https://www.instagram.com/_cobib_/?hl=es">Cobe Brayan Cuero Ballesteros</a>
      </p>
    </footer>
  </section>










</body>

</html>