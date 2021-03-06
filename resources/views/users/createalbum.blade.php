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
                margin: 100px;
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
                    <li class="active"><a href="{{ URL::route('createsuccess') }}">Home</a></li>

                    <li><a href="{{ URL::route('createalbum') }}">Create Album</a></li>
                    <li><a href="{{ URL::route('image') }}">Upload Images</a></li>
                    <li><a href="{{ URL::route('myalbum') }}">My Album</a></li>
                    <li><a href="{{ URL::route('about') }}">About us</a></li>

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

    <div class="container">
        <form class="form-horizontal" action="{{ URL::Route('createsuccess')}}" method="post">
            <h1><u>Create Album</u></h1>
            <div class="form-group">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <label for="name" class="control-label col-md-2">Name*:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="user Name" required></div>


            </div>
            <div class="form-group">
                <label for="message" class="control-label col-md-2">Description*:</label>
                <div class="col-md-6">
                    <textarea class="form-control" name="message"></textarea></div>

            </div>
            <label for="create" class="control-label col-md-2"></label>
            <input type="submit" value="Create" name="create" class="btn btn-success">
        </form>
    </div>
</body>
</html>