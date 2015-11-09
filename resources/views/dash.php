<!DOCTYPE html> 
<html>
<head>
    <link rel="stylesheet" href="CSS/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8" />
    <title>
        Chamberos.net
    </title>
</head>
<body class="card-panel" onload="mostrarUser()">
<!-- MENU --> 
<div>
    <h2 class="center-align">Chamberos.net</h2>
    <!--
    <form class="col s3">
        <div class="input-field col s6">            
            <input placeholder=""disabled type="text" id="usuario" value="Hola">
            <label for="first_name">Bienvenido</label>
        </div>
    </form> 
    -->
     <ul class="collection">
        <li class="collection-item avatar">
            <img src="IMG/user_tiny.png" alt="" class="circle">
            <span class="title"></span>
            <p>Bienvenido:<br>
                <p id="usuario">Usuario</p>

            </p>
            <a href="index.html" class="secondary-content"><i class="medium material-icons">exit_to_app</i></a>     
        </li>
    </ul>
    <nav>
        <a href="dash.html" class="brand-logo center"><i class="medium material-icons" >dashboard</i></a>
        <ul class="left hide-on-med-and-down">
            <li><a href="user.html">USERS</a></li>
            <li><a href="client.html" >CLIENTES</a></li>
            <li><a href="chambas.html">CHAMBAS</a></li>
            <li><a href="invoices.html">INVOICES</a></li>
        </ul>
        <ul id="slide-out" class="side-nav">
            <li><a href="user.html">USERS</a></li>
            <li><a href="client.html" >CLIENTES</a></li>
            <li><a href="chambas.html">CHAMBAS</a></li>
            <li><a href="invoices.html">INVOICES</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </nav>
</div>

    <!-- Cargamos jQuery y materialize js -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="css/materialize/js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.button-collapse').sideNav();
            $('.tooltipped').tooltip({delay: 50});
    });
    </script>
</body>
</html>