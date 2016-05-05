
<!Doctype Html>
<html>
    <head>
       <title>
            MiniShoppingCart
        </title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <style>
            #cart
            {
                position: relative;
                top: 80px;
            }
        </style>

    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">
<!--        <nav class="nav navbar-default navbar-fixed-top">
            <div class="nav container-fluid">
                <div class="navbar-header">
                    <a href="" class="navbar-brand">Mini Shopping Cart</a>
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

                        <li><a href="{{ URL::route('about') }}">About us</a></li>

                    </ul>
                   
                </div>

            </div>
        </nav>-->

        <?php
            if (isset($error)) {
                echo '<div class="alert alert-danger">' . $error . '</div>';
            }
            if (isset($message)) {
                echo '<div class="alert alert-danger">' . $message . '</div>';
                
            }
             ?>
        <div class="container margintop" id="cart">

            <form class="form-horizontal" action="{{ URL::route('cart')}}" method="post">
                <h1><u>Mini Shopping Cart</u></h1>
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <label for="name" class="control-label col-md-2">Name*:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required></div>
                    

                </div>
                <div class="form-group">
                    <label for="product" class="control-label col-md-2">product*:</label>
                    <div class="col-md-6">
                        
                           
                            <input type="file" class="form-control" id="product" name="product" placeholder="product" required>
                    </div>
                   
                </div>
                <div class="form-group">
                    <label for="price" class="control-label col-md-2">Price*:</label>
                    <div class="col-md-6">
                        
                           
                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
                    </div>
                   
                </div>
                <div class="form-group">
                    <label for="shipping" class="control-label col-md-2">Shipping*:</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="shipping" id="shipping" placeholder="shipping Address" required></div>
                    <span id="pwdlocation"></span>
                </div>
                <div class="form-group">
                    <label for="Quantity" class="control-label col-md-2">Quantity*:</label>
                    <div class="col-md-6">
                        <select class="form-control" id="Quantity" name="Quantity" required>
                            <option>Select anyone</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select></div>
                    
                </div>


                <div class="form-group">
                    <label for="description" class="control-label col-md-2">Description*:</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="description" name="description" placeholder="description" required></textarea></div>
                    
                </div>

                <input type="submit" class="btn btn-success" name='register' value='submit'>
            </form>


        </div>

 

   
    </body>
</html>
