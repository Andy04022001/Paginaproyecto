<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>Ropa</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="logo-titulo">
                <a href="index.php">
                    <i class="fa-regular fa-circle-dot"></i>
                    <h1>Ropa</h1>
                </a>
            </div>
            <nav id="nav">
                <a href="index.php">Inicio</a>
                <a href="tienda.php" class="selected">Tienda</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
                <span id="close-responsive">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </nav>
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
            <div class="header-seccion">
                <div class="col">
                    <strong><span class="link-blanco">Inicio</span> / Tienda</strong>
                </div>
                <div class="centro">
                    <h2>Shop</h2>
                </div>
                <div class="col busqueda">
                    <strong>Resultados (1-6)</strong> 
                    <select name="" id="">
                        <option value="">Todos los productos</option>
                        <option value="">Por precio</option>
                        <option value="">Por modelo</option>
                    </select>
                </div>
            </div>

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
                                <img src="imagen/tenis H.jpg" alt="">
                                <h2>Nike Air Max 270 to Chuck Taylors</h2>
                                <h2></h2>
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
                                <img src="imagen/tenis C.jpg" alt="">
                                <h2>Tenis Jaguar Oficial Deportiva</h2>
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
                                <div class="fondo green">
                                    <div class="circulo"></div>
                                </div>
                                <img src="imagen/mini-shoes3.png" alt="">
                                <h2>Tenis  Entrenamiento Nike Air Max</h2>
                                <h2></h2>
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
                                <img src="imagen/tenis X.jpg" alt="">
                                <h2>Tenis Nike Court Vision Low Next Nature</h2>
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
                                <img src="imagen/tenis ikunka.jpg" alt="">
                                <h2>Tenis Topper X Forcer (Cf)</h2>
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