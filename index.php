<!DOCTYPE html>
<html ng-app="PagComidasApp">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/estiloPagComidas.css">
    </head>
    <body>

        <div class="container container-fluid" ng-view ng-cloak></div>

        <!-- librerias de Angular -->
        <script src="js/angular-1.6.1/angular.min.js" type="text/javascript"></script>
        <script src="js/angular-1.6.1/angular-route.min.js" type="text/javascript"></script>
        <script src="js/angular-1.6.1/angular-resource.min.js" type="text/javascript"></script>

        <!-- librerias js -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- enlazamos app.js y app.config.js -->
        <script src="app/app.js" type="text/javascript"></script>
        <script src="app/app.config.js" type="text/javascript"></script>

        <!-- enlazamos los controllers -->
        <script src="app/controller/controller.index.js" type="text/javascript"></script>

    </body>
</html>