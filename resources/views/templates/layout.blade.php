<!DOCTYPE html>
<html lang="es">
<head>
	<!--Let browser know website is optimized for mobile PARA QUE SEA RESPONSIVA-->
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Aqui te vendo!</title>
    <link rel="stylesheet" href="{{asset('assets/stylesheets/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/stylesheets/materialize.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/stylesheets/font-awesome.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <a href="#" class="brand">
                <img src="{{asset('assets/images/monkey.png')}}" alt="" class="logo">
                <span>Aquitevendo.com.mx</span>
            </a>
        </div>
    </header>
    <div class="background-one z-depth-1">
        <div class="container center-align">
            <br>
            <h2 class="white-text">¡Tenemos lo que buscas!</h2>
            <div id="busquedas">
                <div class="row">
                    <div class="filter">
                        <i class="fa fa-car"></i>
                        <input type="text" placeholder="Filtro 1">
                    </div>
                    <div class="filter">
                        <i class="fa fa-wrench"></i>
                        <input type="text" placeholder="Filtro 2">
                    </div>
                    <div class="button">
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                            BUSCAR <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <section class="container">
        <div class="row">
            <div class="col m9" id="categories">
                @yield('contenido')
            </div>
            <div class="col m3" id="aside">
                <div class="content center-align">
                    <br>
                    <h5>¡Aquí ponemos tu logo!</h5>
                    <img src="{{asset('assets/images/monkey.png')}}" alt="" class="logo">
                    <p>Cotacta a nuestros asesores</p>
                    <br>
                </div>
                <div class="content" id="pop-categories">
                    <h4>Categorías populares</h4>
                    <hr>
                    <ul>
                        <li><a href="">Arte (1,163)</a></li>
                        <li><a href="">Oportunidades de negocio (4,974)</a></li>
                        <li><a href="">Eventos de la comunidad (1,258)</a></li>
                        <li><a href="">Electronica y electrodomesticos (1,578)</a></li>
                        <li><a href="">Trabajos y empleos (3,609)</a></li>
                        <li><a href="">Moticicletas (968)</a></li>
                        <li><a href="">Mascotas (1,188)</a></li>
                        <li><a href="">Servicios (7,583)</a></li>
                        <li><a href="">Vehículos (1,129)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact">
        <div class="container">
            <div class="center-align">
                <h1>Aquitevendo.com.mx</h1>
                <h3>Tenemos a todos nuestros monos trabajando</h3>
                <h5>"Una nueva experiencia en ventas"</h5>
                <br>
                <a href="#" class="btn btn-contact">
                    <i class="fa fa-mobile-phone"></i> Contactanos
                </a>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="{{asset('assets/javascripts/jquery-2.1.4.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/javascripts/materialize.js')}}"></script>
</body>
</html>