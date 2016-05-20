<!DOCTYPE HTML>
<html>
    <head>
        <title>Fetching data</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css')}}">
         </head>
    <body>
       @unless(empty($people))
       There are some peoples;
      
        @endunless
        @foreach($people as $persons)
        
    <li style="list-style: none">{{ $persons }} </li>
        
        @endforeach
         
       
    </body>
   
</html>