
<?php
 $users = DB::table('Forum')->get();

// echo "<pre>",print_r($users),"</pre>";
     

?>  




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
                    <form class="navbar-form navbar-right" id="login" action="{{ URl::route('login')}}" method="post">
                        <div class="form-group">
                             <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
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
        
            <div class="container margintop" id="register">

                <form class="form-horizontal" action="{{ URL::route('registersubmit')}}" method="post">
                <h1><u>Registration Page</u></h1>
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <label for="fname" class="control-label col-md-2">First Name*:</label>
                    <div class="col-md-6">
                        <input type="text" title="Your First name" class="form-control" id="fname" name="firstname" placeholder="First Name"></div>
                    <span id="fnamelocation"></span>

                </div>
                <div class="form-group">
                    <label for="lname" title="Your Last Nmae" class="control-label col-md-2">Last Name*:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="lname" name="lastname" placeholder="Last Name"></div>
                    <span id="lnamelocation"></span>

                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-md-2">Email Address*:</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" id="email" name="email" title="Your Email" placeholder="your Email"></div>
                    </div>
                    <span id="emaillocation"></span>
                </div>
                <div class="form-group">
                    <label for="pwd" class="control-label col-md-2">Password*:</label>
                    <div class="col-md-6">
                        <input type="password" title="Your Password" class="form-control" name="password" id="pwd" placeholder="Enter password"></div>
                    <span id="pwdlocation"></span>
                </div>
                <div class="form-group">
                    <label for="cpwd" class="control-label col-md-2">Conform Password*:</label>
                    <div class="col-md-6">
                        <input type="password" title="type same password from above field" name="conformpassword" class="form-control" id="cpwd" placeholder="Retype password"></div>
                    <span id="cpwdlocation"></span>
                </div>
                

                <div class="form-group">
                    <label for="phone" class="control-label col-md-2">Phone Number*:</label>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" id="phone" name="phone" title="Your Phone Number" placeholder="your Phone Number" maxlength="10"></div>
                    <span id="phonelocation"></span>
                </div>
                
                        <input type="submit" class="btn btn-success" name='register' value='submit'>
                    </form>


                </div>


       
        <!---div class="container contentContainer">
            <div class="row center">
                <h1 class="center title">Why This App is Awesome</h1>
                <p class="lead center">Summary of the apps Awesomeness</p>
            </div>
        </div -->
         

    </body>
</html>