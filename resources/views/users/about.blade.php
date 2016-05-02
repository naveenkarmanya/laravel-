<!Doctype Html>
<html>
    <head>
        <title>First template</title>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <style>
            
            .margintop
            {
                margin: 30px;
                position: relative;
                top: 100px;
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

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL::route('upload') }}">Home</a></li>

                    
                    <li><a href="{{ URL::route('about') }}">About us</a></li>

                </ul>
                <ul class="nav nav-navbar pull-right">
                    <li><a href="{{ URL::route('upload') }}">LogOut</a></li>
                </ul>
            </div>

        </div>


    </nav>

    <div class="container-fluid margintop">
        <div class="row">
            <div class="well">
                <h1><u>About My Gallery</u></h1>
                
            </div>
            
        </div>
    </div>
</body>
</html>