<!doctype html>
<html>
    <head>
        <title>Dashboard</title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/jquery.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
        <style>
            #cloud{
                font-size: 2em;
               
            }
            li:hover{
                background-color: #DBDBDB;
            }
            
        </style>
    </head>
    <body>
        <nav class="navbar-default navbar-fixed">
            <div class="container">
                <h2>Mini Shopping Cart</h2>
                <div class="navbar-header">
                 
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                        <span class="sr-only"> Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li ><a href="{{ URL::route('minishoppingcart')}}">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>