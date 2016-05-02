
<!Doctype Html>
<html>
    <head>
        <title>Guest</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <style>
            #register
            {
                margin-top: 40px;
            }
        </style>

    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">
<!--        <nav class="nav navbar-default navbar-fixed-top">
            <div class="nav container-fluid">
                <div class="navbar-header">
                    <a href="" class="navbar-brand">My Guest Book</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">Home</a></li>

                        <li><a href="">About us</a></li>

                    </ul>
                    
                </div>

            </div>
        </nav>-->
     

        <div class="container margintop" id="register">

            <form class="form-horizontal" action="{{ URL::route('guestbook')}}" method="post">
                <h1><u>Guest book</u></h1>
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <label for="name" class="control-label col-md-2">Name*:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required></div>
                 

                </div>
               
                <div class="form-group">
                    <label for="email" class="control-label col-md-2">Email*:</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="your Email" required></div>
                    </div>
                  
                </div>
                <div class="form-group">
                    <label for="message" class="control-label col-md-2">Message*:</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            
                            <textarea class="form-control" name="message" id="message"></textarea>
                             </div>
                  
                </div>
                   </div>
                <input type="submit" class="btn btn-success col-md-offset-2" name='submit' value='submit'>
            </form>


        <?php
        if (isset($error)) {
            echo '<div class="alert alert-danger">' . $error . '</div>';
        }
        if (isset($message)) {
            echo '<div class="alert alert-danger">' . $message . '</div>';
        }
        ?>

    </body>
</html>