<!doctype html>
<html>
    <head>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Mini Shopping Cart</title>
        <script src="/js/jquery.js" type="text/javascript"></script>
        <script src="/js/shoppingcart.js" type='text/javascript'></script>
       
    </head>
    <body>
        <nav>
            
           @include('shoppingcart/dashboard')
        </nav>
        <?php $id=null;?>
        <div class="container" >
            <div class="col-md-5 cart" >
                
            </div>
            
            <div class="col-md-5 col-md-offset-3 well " >
                @foreach($product as $values)
                @foreach($values as $value=>$key)
                @if($value=='Id')
                <?php $id=$key;?>
                @endif
                @if($value=='Name')
                <p><b>{{$key}}</b></p>
                @else
                @if($value=='Price')
                <h4>Amount Rs:<p>{{$key}}/- <br></h4><button class="btn btn-default" onclick="add(<?php echo $id;?>)">Add To Cart</button></p>
                @else
                <p>{{$key}}</p>
                @endif
                @endif
                @endforeach
                @endforeach
                
            </div>
            <div class="checkout col-md-5 col-md-offset-3">
            <form method="post" action="{{ URL::route('checkout')}}">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="submit" class="btn btn-success" value="Checkout">
            </form>
            </div>
        </div>
    </body>
</html>