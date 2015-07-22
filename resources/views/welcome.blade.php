<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
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
    <div class="background-one">
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
    <div style="text-align:center">
        <h1>Aquitevendo.com.mx</h1>
        <h3>Tenemos a todos nuestros monos trabajando</h3>
        <h5>"Una nueva experiencia en ventas"</h5>
    </div>
    <script type="text/javascript" src="{{asset('assets/stylesheets/materialize.js')}}"></script>
</body>
</html>