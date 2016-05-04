<!doctype html>
<html>
    <head><title>Cross Site Request Forgery Protection</title></head>
    <body>
        <form method="post">
            <div class="product">
                <strong>A Product</strong>
            </div>
            <div class="fields">
                Quantity:<input type="text" name="quantity">
            </div>
            <input type="submit" name="submit" value="order">
            <input type="hidden" name="product" value="1">
            <input type="hidden" name="token" value="<?php echo First::generate();?>">
        </form>
        
    </body>
</html>
<?php
echo $_SESSION['token'];
?>