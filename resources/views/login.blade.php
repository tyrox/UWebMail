<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>  
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>      
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">        
        
    </head>
    <body class="card-panel">
            <div class="card-panel teal lighten-4">                
                    <h5 class=""> Login <b>UWebMail</b></h5>
                <div class="row s6 card-panel  center">
                    <!--Datos del login-->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="user" type="text" class="validate">
                                    <label for="user">User</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                                <div class="input-field col s3">
                                    <div class="center">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Enter
                                            <i class="material-icons right">send</i>
                                            <a href="dash.php"></a>
                                        </button>
                                        
                                    </div>
                                    <a href="dash.php"> adfhj</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    <!--Registrarse--> 
                    <h5 class=""> <b>Create your Account</b></h5>
                    <div class="row s12 card-panel  center">                        
                        <form class="col s4">  
                            
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="name" type="text" class="validate">
                                        <label for="name">Full Name</label>
                                    </div>                               
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="NewUser" type="text" class="validate">
                                        <label for="NewUser">User</label>
                                    </div>                                
                                </div>                            
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="NewPassword" type="password" class="validate">
                                        <label for="NewPassword">Password</label>
                                    </div>                                
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="Rpassword" type="password" class="validate">
                                        <label for="Rpassword">Confirm your password</label>
                                    </div>                                
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field row s3">
                                        <div class="center">
                                            <button class="btn waves-effect waves-light" type="" name="action">
                                                Sign Up                                              
                                            </button>
                                        
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>  
            </div>        
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
                                                                                        