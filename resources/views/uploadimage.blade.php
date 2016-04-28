
<!Doctype Html>
<html>
    <head>
        <title>First template</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <style>

        </style>

    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">
        <nav class="nav navbar-default ">
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

                        <li><a href="{{ URL::route('register') }}">Register</a></li>
                        <li><a href="{{ URL::route('about') }}">About us</a></li>

                    </ul>
                    <form class="navbar-form navbar-right" id="login" action="{{ URl::route('Login')}}" method="post">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <input type="text" placeholder="Email" name='login_email' class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name='login_password' class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-success" name='login' value='login'>
                    </form>

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
            <div class="row">
                <div class="col-md-6">
                    <img src="/images/upload.jpg" alt="image" class="" height="450px" width="450px">
                </div>
                <div class=" col-md-6 ">
                    <h1 class="bold">
                        UPLOAD UNLIMITED IMAGES.<br>REGISTER <u>FREE</u> ACCOUNT TODAY...
                    </h1>


                </div>
            </div>
        </div>

    </body>
</html>