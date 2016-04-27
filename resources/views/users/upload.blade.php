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
                    <li class="active"><a href="{{ URL::route('upload') }}">Home</a></li>

                    <li><a href="{{ URL::route('createalbum') }}">Create Album</a></li>
                    <li><a href="{{ URL::route('image') }}">Upload Images</a></li>
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

<div class="container">
    <form class="form-horizontal" action="{{ URL::Route('imagesuccess')}}" method="post" enctype="multipart/form-data">
                <h1><u>Create Album</u></h1>
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <label for="user" class="control-label col-md-2">Name*:</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control" id="user" name="upload" ></div>
                    

                </div>
               <div class="form-group ">
                   <label for="sel1" class="control-label col-md-2">Select list:</label>
                   <div class="col-md-6">
  <select class="form-control" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select></div>
</div>
                <label for="create" class="control-label col-md-2"></label>
                <input type="submit" value="Create" name="create" class="btn btn-success">
   </form>
</div>
        </body>
</html>