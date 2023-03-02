<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script id='sonic_js' data-port='8194' src='https://sonic.sistemahost.es/cp/widgets.js?r=460'></script>
        <script type="text/javascript" src="../js/chorradillas.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/config.css">
    </head>
        <body>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8"><img src="../img/fondo2.jpg" width="100%" height="140">     
                    <div class="btn-group btn-group-center abs-center">
                        <button type="button" class="btn botones" onclick="location.href='programas.php'">Programas</button>
                        <button type="button" class="btn botones">Eventos</button>
                        <button type="button" class="btn botones" onclick="location.href='sellos.php'">Sellos</button>
                        <button type="button" class="btn botones" onclick="location.href='../index.php'">Inicio</button>
                    </div>       
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <img class="redondas" src="../img/podcast.png" onclick="primeramaraton()"></img>
                        <img class="redondas" src="../img/podcast.png" onclick="primerasemana()"></img>
                    </div>
                </div>
            </div>
        </body>
</html>