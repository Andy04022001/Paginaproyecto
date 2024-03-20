<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>Mansión Deportiva</title>
</head>
<body>
    <div class="contenedor">
        <!-- ENCABEZADO PRINCIPAL: LOGO MENU CARRITO -->
        <header>
            <div class="logo-titulo">
                <a href="index.php">
                    <i class="fa-regular fa-circle-dot"></i>
                    <h1>Mansión Deportiva</h1>
                </a>
            </div>
            <nav id="nav">
                <a href="index.php" class="selected">Inicio</a>
                <a href="tienda.php">Tienda</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
                <!-- icono cerrar menu responsive -->
                <span id="close-responsive">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </nav>
            <!-- icono menu responsive -->
            <div id="nav-responsive">
                <i class="fa-solid fa-bars"></i>
            </div>
            
            <div class="carrito">
                <span class="total-compra">$ 55,000.00</span>
                <a href="carrito.php">
                    <span class="icono-carrito">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <div class="total-item-carrito">
                            2
                        </div>
                    </span>
                </a>
            </div>
        </header>

        <section class="contenedor-seccion">
            <div class="fondo-seccion"></div>
            
            <section id="inicio" class="inicio">
                <div class="col">
                    <h2 class="titulo-inicio">Encuen los Mejores Tenis  <br>
                        que buscas al mejor precio</h2>
                    <div class="buscador">
                        <input type="text" placeholder="Qué estas buscando?">
                        <span class="btn-buscar"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                   
                </div>
                <div class="col derecha">
                    <div class="contenedor-img">
                        <img src="img/shoes5.png" alt="">
                    </div>
                </div>
            </section>

            <!-- PRODUCTOS -->
            <section id="productos" class="productos">
                <div class="fila">
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><i class="fa-solid fa-bag-shopping"></i></span>
                        </header>
                        <a href="producto1.php">
                            <div class="contenido">
                                <div class="fondo orange">
                                    <div class="circulo"></div>
                                </div>
                                <img src="imagen/shoes1.png" alt="">
                                <h2>Nike Air Max 270 to Chuck Taylors</h2>
                                <h2>$20.000</h2>
                            </div>
                        </a>

                    </div>
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><i class="fa-solid fa-bag-shopping"></i></span>
                        </header>
                        
                        <a href="producto2.php">
                            <div class="contenido">
                                <div class="fondo blue">
                                    <div class="circulo"></div>
                                </div>
                                <img src="imagen/ropa1.jpg" alt="">
                                <h2>Tenis Jaguar Oficial Deportiva</h2>
                                <h2>$35.000</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><i class="fa-solid fa-bag-shopping"></i></span>
                        </header>
                        
                        <a href="#">
                            <div class="contenido">
                                <div class="fondo green">
                                    <div class="circulo"></div>
                                </div>
                                <img src="imagen/shoes3.png" alt="">
                                <h2>Tenis Entrenamiento Nike Air Max</h2>
                                <h2>$35.000</h2>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="fila">
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><i class="fa-solid fa-bag-shopping"></i></span>
                        </header>
                        
                        <a href="#">
                            <div class="contenido">
                                <div class="fondo green">
                                    <div class="circulo"></div>
                                </div>
                                <img src="imagen/mini-shoes4.png" alt="">
                                <h2>Tenis Nike Court Vision Low Next Nature</h2>
                                <h2>$64.000</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><i class="fa-solid fa-bag-shopping"></i></span>
                        </header>
                        
                        <a href="#">
                            <div class="contenido">
                                <div class="fondo orange">
                                    <div class="circulo"></div>
                                </div>
                                <img src="imagen/mini-shoes5.png" alt="">
                                <h2>Tenis  Urbanas Olympikus G Dínamo Mujer</h2>
                                <h2></h2>
                            </div>
                        </a>
                    </div>
                    <div class="col fondo-dots">
                        <header> 
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><i class="fa-solid fa-bag-shopping"></i></span>
                        </header>
                        
                        <a href="#">
                            <div class="contenido">
                                <div class="fondo blue">
                                    <div class="circulo"></div>
                                </div>
                                <img src="imagen/shoes6.png" alt="">
                                <h2>Tenis  Topper X Forcer (Cf)</h2>
                                <h2></h2>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>