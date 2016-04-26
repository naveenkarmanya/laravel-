<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Auto suggest field</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script src="/js/jquery.min.js"></script>
 <script type="text/javascript" src="/js/dropdown.js"></script>		   
    </head>
    <body>
        <form action="{{URL::route('dropdown')}}" method="post">
        <input type="text" class="autosuggest" name="autosuggest"> 
        <input type="submit" value="Search" >
        <div class="dropdown">
            <ul class="result">

              
            </ul>
        </div>
        </form>
        
       
    </body>
</html>