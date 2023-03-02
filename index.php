<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script id='sonic_js' data-port='8194' src='https://sonic.sistemahost.es/cp/widgets.js?r=460'></script>
        <script id='sonic_js' data-port='8194' src='https://sonic.sistemahost.es/cp/widgets.js?r=423'></script>
        <script src="https://player.twitch.tv/js/embed/v1.js"></script>
        <link rel="stylesheet" type="text/css" href="css/config.css">
    </head>
        <body>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8"><img src="img/fondo2.jpg" width="100%" height="140">     
                    <div class="btn-group btn-group-center abs-center">
                        <button type="button" class="btn botones" onclick="location.href='pestanyas/programas.php'">Programas</button>
                        <button type="button" class="btn botones">Eventos</button>
                        <button type="button" class="btn botones" onclick="location.href='pestanyas/podcasts.php'">Podcasts</button>
                        <button type="button" class="btn botones" onclick="location.href='pestanyas/sellos.php'">Sellos</button>
                    </div>       
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6"><iframe src="https://chat.hardelectronicstation.es" width="100%" height="650"></iframe>  </div>
                    <div class="col-lg-4"><div id="twitch-embed"></div></div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4">
                        <iframe src="https://sonic.sistemahost.es/cp/widgets/player/single/?p=8194" height="110" width="520" scrolling="no" style="border:none;"></iframe>
                        <p>Número online de oyentes: <p id='sonic_listeners'></p></p>    
                    </div>
                    <div class="col-lg-4">
                        <iframe src="https://sonic.sistemahost.es/cp/widgets/dj/?p=8194" height="160" width="650" scrolling="no" style="border:none;"></iframe>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2"><div>
                </div>
            </div>
            <script type="text/javascript">
                new Twitch.Player("twitch-embed", {
                channel: "hardelectronicstation",
                widht: 600,
                height: 600
                });
            </script>
        </body>
</html>