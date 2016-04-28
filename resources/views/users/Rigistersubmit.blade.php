<!Doctype Html>
<html>
    <head>
        <title>First template</title>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <style>
            .navbar-brand
            {
                font-size: 1.8em;
            }
            #topcontainer
            {
                background-image: url();
                height: 680px;
                width: 100%;
                background-size:cover; 
            }

            #toprow
            {
                margin-top: 100px;
                text-align: center;
                color: white;




            }
            #toprow h1
            {
                font-size: 300%;


            }
            .bold
            {
                font-weight: bold;
            }
            .margintop
            {
                margin: 60px;
            }
            .center
            {
                text-align: center;
            }
            .title
            {
                margin-top: 100px;
                font-size: 300%;
            }
            .marginbottom
            {
                margin-bottom: 30px;
            }
            #footer
            {
                background-color:#B0D1FB;
                padding-top: 10px;
                width:100%;
            }
            #login
            {
                valid:'has-success';
                invalid:'has-error';
            }

        </style>

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <nav class="nav navbar-default navbar-fixed-top">
            <div class="nav container-fluid">
                <div class="navbar-header">
                    <a href="" class="navbar-brand">My Apps</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ URL::route('upload') }}">Home</a></li>
                        <li><a href="{{ URL::route('upload') }}">LogIn</a></li>
                        <li><a href="{{ URL::route('register') }}">Register</a></li>
                        <li><a href="{{ URL::route('about') }}">About us</a></li>

                    </ul>


                </div>

            </div>

        </nav>
        <div class="margintop">


            @if ($error))
            <div class="alert alert-danger"> {{$error}} </div>
            @endif
            @if ($message)
            <div class="alert alert-success"> {{$message}}<a href="{{ URL::Route('upload') }}">-->Login<--</a></div>


            @endif

        </div>
    </body>
</html>