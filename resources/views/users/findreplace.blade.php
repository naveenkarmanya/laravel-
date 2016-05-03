<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="{{URL::route('findandreplace')}}" method="post">
                    <input type="text" name="find" placeholder="words,to,find">
                    <input type="text" name="replace" placeholder="replacement,text,here">
                    <p><textarea name="text" rows="10" cols="37"><?php echo (empty($text) == false) ? $text : ''; ?></textarea></p>
                    <input type="submit" value="submit">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                @if(isset($text))
                {{$findvalue}}
                @endif
                
            </div>
        </div>
    </body>
</html>