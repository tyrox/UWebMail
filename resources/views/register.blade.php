<!DOCTYPE html>
<html lang='es'>
    <head>
        <title>
            @section('titulo')
                Register
            @show
        </title>  
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>      
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">        
        @yield('head')
    </head>
    <body class="card-panel">
        
        <section>            
            <div class="card-panel teal lighten-4">                                                
                    <!--Registrarse--> 
                    
                    <div class="container">
                        
                        <div class="container">
                            <h5 class=""> Create your Account</h5>
                            <div class="row s card-panel container">
                            
                                <div class="col s12">
                                    @if(Session::has('datos'))
                                        <p>Full name: {!!$datos->name!!}</p>
                                        <p>User name: {!!$datos->user!!}</p>
                                        <p>Email: {!!$datos->email!!}</p>
                                        <p>Password: {!!$datos->password!!}</p>

                                    @else
                                        {!!Form::open(array('method' => 'POST', 'url' => 'register'))!!}
                                            {!!Form::label('name', 'Full name')!!}
                                                {!!Form::text('name')!!}
                                                {!!$errors->first('name')!!}

                                            {!!Form::label('user', 'User name')!!}
                                                {!!Form::text('user')!!}
                                                {!!$errors->first('user')!!}

                                            {!!Form::label('email', 'E-mail')!!}
                                                {!!Form::text('email')!!}
                                                {!!$errors->first('email')!!}

                                            {!!Form::label('password', 'Password')!!}
                                                {!!Form::password('password')!!}
                                                {!!$errors->first('password')!!}

                                            {!!Form::label('rpassword', 'Confirm your password')!!}
                                                {!!Form::password('rpassword')!!}
                                                {!!$errors->first('rpassword')!!}

                                            {!!Form::submit('OK', ['class'=>'btn-floating waves-teal'])!!}
                                                

                                    {!!Form::close()!!}
                                    @endif
                                </div> 
                            </div>
                        </div>                        
                    </div> 
            </div>
               
        </section>
        
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
                                                                                        