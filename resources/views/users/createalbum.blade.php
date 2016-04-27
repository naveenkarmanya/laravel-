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
                margin: 100px;
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

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL::route('upload') }}">Home</a></li>

                    <li><a href="{{ URL::route('createalbum') }}">Create Album</a></li>
                    <li><a href="{{ URL::route('Counter') }}">Upload Images</a></li>
                    <li><a href="{{ URL::route('Counter') }}">About us</a></li>

                </ul>
                <ul class="nav nav-navbar pull-right">
                    <li><a href="{{ URL::route('upload') }}">LogOut</a></li>
                </ul>
            </div>

        </div>


    </nav>

    <div class="container-fluid margintop">
        <?php
        if (isset($error)) {
            echo '<div class="alert alert-danger">' . $error . '</div>';
        }
        if (isset($message)) {
            echo '<div class="alert alert-danger">' . $message . '</div>';
        }
        ?>
    </div>
</body>
<div class="container">
   <form class="form-horizontal" action="{{ URL::route('submit')}}" method="post">
                <h1><u>Create Album</u></h1>
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <label for="user" class="control-label col-md-2">Name*:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="user" name="user" placeholder="user Name" required></div>
                    

                </div>
                <div class="form-group">
                    <label for="message" class="control-label col-md-2">Description*:</label>
                    <div class="col-md-6">
                        <textarea class="form-control"></textarea></div>
                   
                </div>
                <label for="create" class="control-label col-md-2"></label>
                <input type="submit" value="Create" name="create" class="btn btn-success">
   </form>
</div>
</html>