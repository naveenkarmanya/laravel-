



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
                margin: 30px;
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
    <li class="active"><a href="{{ URL::route('Counter') }}">Home</a></li>
    <li><a href="{{ URL::route('Counter') }}">LogIn</a></li>
    <li><a href="{{ URL::route('Counter') }}">Register</a></li>
    <li><a href="{{ URL::route('Counter') }}">About us</a></li>

</ul>
                    <form class="navbar-form navbar-right" id="login" action="{{ URl::route('Counter')}}" method="post">
                        <div class="form-group">
                            <input type="text" placeholder="Email" name='email' class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name='password' class="form-control">
                        </div>
                        <input type="submit" class="btn btn-success" name='login' value='login'>
                    </form>

                </div>

            </div>
        </nav>
        <div class="container contentContainer" id="topcontainer">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="toprow">
                    <h1>My Awesome Apps</h1>
                    <p class="lead">This is why should download this fantastic app.</p>
                    <p class="bold">Some more information about the app. You can go into a little more detail here if you want to.</p>
                    <p class="bold marginTop">Interested? Join our mailing list!</p>

                    <form class="margintop" >
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" placeholder="your Email">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg margintop">Submit</button>
                    </form>

                </div>


            </div>

        </div>
        <!---div class="container contentContainer">
            <div class="row center">
                <h1 class="center title">Why This App is Awesome</h1>
                <p class="lead center">Summary of the apps Awesomeness</p>
            </div>
        </div -->
         

    </body>
</html>