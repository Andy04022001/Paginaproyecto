<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>Sports</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="logo-titulo">
                <a href="index.php">
                    <i class="fa-regular fa-circle-dot"></i>
                    <h1>Sports</h1>
                </a>
            </div>
            <nav id="nav">
                <a href="index.php" class="selected">Inicio</a>
                <a href="tienda.php">Tienda</a>
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
                <span class="total-compra"></span>
                <a href="carrito.php">
                    <span class="icono-carrito">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <div class="total-item-carrito">
                            
                        </div>
                    </span>
                </a>
            </div>
        </header>

        <section class="contenedor-seccion">
            <div class="fondo-seccion"></div>
            <div class="header-seccion">
                <div class="col">
                    <strong><span class="link-blanco">Inicio</span> / Producto Detalle</strong>
                </div>
                <div class="centro">
                    <h2>Detalle del Producto</h2>
                </div>
                <div class="col busqueda">
                    <a href="producto1.php">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <a href="#">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <section class="detalle-producto">
                <div class="fila">
                    <div class="col izquierda">
                        <h3>Tenis  Jaguar Oficial Deportiva</h3>
                        <p>Está basada en una mediasuela construida con material ligero y reactivo como es React Foam y, para rematar al conjunto, se le inserta una cámara de aire.</p>
                        <div class="miniaturas">
                            <img src="imagen/descarga1.jpg" alt="" class="mini-selected" onclick="setMini('0')">
                            <img src="imagen/descarga2.jpg" alt="" onclick="setMini('1')">
                            <img src="imagen/descarga3.jpg" alt="" onclick="setMini('2')">
                        </div>

                    </div>
                    <div class="col centro">
                        <div class="img-producto" id="img-producto">
                            <img src="imagen/descarga3.jpg" alt="" id="imgProducto">
                            <h3 class="precio-producto"></h3>
                        </div>
                    </div>
                    <div class="col derecha">
                        <div class="info-detalle">
                            Review:
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            4.5 (60)
                        </div>
                        <div class="info-detalle">
                            Color:
                            <input type="radio" class="color1" name="color">
                            <input type="radio" class="color2" checked name="color"> 
                            <input type="radio" class="color3" name="color"> 
                            <input type="radio" class="color4" name="color">  
                        </div>
                        <div class="info-detalle">
                            Size:
                            <button class="size-selected" onclick="setSize(0)">39</button>
                            <button onclick="setSize(1)">40</button>
                            <button onclick="setSize(2)">42</button>
                        </div>

                        <button class="btn-agregar-carrito">Agregar al Carrito</button>
                    </div>
                </div>
            </section>

            <h2 class="subtitulo-seccion">Productos Relacionados</h2>
            
            <section id="productos" class="productos">
                <div class="fila">
                    <div class="col fondo-dots">
                        <header>
                            <span class="like"><i class="fa-solid fa-heart"></i></span>
                            <span class="cart"><i class="fa-solid fa-bag-shopping"></i></span>
                        </header>
                        <a href="producto1.html">
                            <div class="contenido">
                                <div class="fondo orange">
                                    <div class="circulo"></div>
                                </div>
                                <img src="imagen/descarga2.jpg" alt="">
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
                                <img src="imagen/descarga2.jpg" alt="">
                                <h2>Tenis  Jaguar Oficial Deportiva</h2>
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
                                <img src="imagen/descarga3.jpg" alt="">
                                <h2>Tenis Entrenamiento Nike Air Max</h2>
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
                                <img src="imagen/descarga6.jpg" alt="">
                                <h2>Tenis  Nike Court Vision Low Next Nature</h2>
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
                                <img src="imagen/descarga5.jpg" alt="">
                                <h2>Tenis Urbanas Olympikus G Dínamo Mujer</h2>
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
                                <img src="imagen/descarga1.jpg" alt="">
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