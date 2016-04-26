<!DOCTYPE html>
<html>
    <head>
        <title>Auto suggest field</title>
        <link rel="stylesheet" type="text/css" href="/public/css/style.css">
        <style>
        body{
   
    
}

.autosuggest, .dropdown, .result{
    margin: 0;
    padding: 0;
    border: 0;
    width: 250px;
}

.autosuggest{
    padding: 4px;
    border: 1px solid #000;
}

.result{
    width: 260px;
    list-style: none;
}

.result li{
    padding: 5px;
    border: 1px solid #000;
    border-top: 0;
    cursor: pointer;
}

.result li:hover{
    background: #000;
    color: #fff;
}
</style>
    </head>
    <body>
        <form action="{{URL::route('dropdown')}}">
        <input type="text" class="autosuggest" name="autosuggest"> 
        <input type="submit" value="Search" >
        <div class="dropdown">
            <ul class="result">
                <?php
                print_r($users1);
                ?>
            </ul>
        </div>
        </form>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/primary.js"></script>
    </body>
</html>