<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>Principal</title>
</head>
<body>
    <div class="contenedor">
        <header>
            <div class="logo-titulo">
                <a href="index.php">
                    <i class="fa-regular fa-circle-dot"></i>
                    <h1>Principal</h1>
                </a>
            </div>
            <nav id="nav">
                <a href="index.php">Inicio</a>
                <a href="tienda.php">Tienda</a>
                <a href="blog.php" class="selected">Blog</a>
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
                    <strong><span class="link-blanco">Inicio</span> / Blog</strong>
                </div>
                <div class="centro">
                    <h2>Blog</h2>
                </div>
                <div class="col busqueda">
                    <strong>Buscar por</strong> 
                    <select name="" id="">
                        <option value="">Fecha</option>
                        <option value="">Mas leidos</option>
                        <option value="">Mas Populares</option>
                    </select>
                </div>
            </div>

            <section id="blog" class="blog">
                <div class="fila">
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="imagen/blog1.png" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>800</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>1,200</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>3/12/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>NEW BALANCE 1906 - EL BUQUE INSIGNIA DE NEW BALANCE PARA 2024</h2>
                            <p>New Balance sigue avanzando y apostando por nuevas siluetas como la 1906R, una zapatilla que busca replicar el éxito de ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="imagen/blog2.jpeg" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>700</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>200</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>5/11/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>NEW BALANCE 1906 - EL BUQUE INSIGNIA DE NEW BALANCE PARA 2024</h2>
                            <p>New Balance sigue avanzando y apostando por nuevas siluetas como la 1906R, una zapatilla que busca replicar el éxito de ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="imagen/blog4.png" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>600</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>800</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>05/09/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>NEW BALANCE 1906 - EL BUQUE INSIGNIA DE NEW BALANCE PARA 2024</h2>
                            <p>New Balance sigue avanzando y apostando por nuevas siluetas como la 1906R, una zapatilla que busca replicar el éxito de ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                </div>
                <div class="fila">
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="imagen/blog4.png" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>800</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>1,200</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>3/12/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>NEW BALANCE 1906 - EL BUQUE INSIGNIA DE NEW BALANCE PARA 2024</h2>
                            <p>New Balance sigue avanzando y apostando por nuevas siluetas como la 1906R, una zapatilla que busca replicar el éxito de ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="imagen/blog5.png" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>700</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>200</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>5/11/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>NEW BALANCE 1906 - EL BUQUE INSIGNIA DE NEW BALANCE PARA 2024</h2>
                            <p>New Balance sigue avanzando y apostando por nuevas siluetas como la 1906R, una zapatilla que busca replicar el éxito de ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                    <div class="col fondo-dots">
                        <div class="contenedor-img-metadatos">
                            <img src="imagen/blog6.png" alt="">
                            <div class="metadatos" >
                                <span class="like">
                                    <i class="fa-solid fa-thumbs-up"></i>600</span>
                                <span class="like"><i class="fa-solid fa-eye"></i>800</span>
                                <span class="cart"><i class="fa-solid fa-calendar-days"></i>05/09/2024</span>
                            </div>
                        </div>
                        
                        <div class="contenido">

                            <h2>NEW BALANCE 1906 - EL BUQUE INSIGNIA DE NEW BALANCE PARA 2024</h2>
                            <p>New Balance sigue avanzando y apostando por nuevas siluetas como la 1906R, una zapatilla que busca replicar el éxito de ...</p>
                            <a href="#" class="btn-blog">Leer mas</a>
                        </div>
                        
                    </div>
                </div>


            </section>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>