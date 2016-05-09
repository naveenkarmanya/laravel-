<!doctype html>
<html>
    <head>
        <title>
            Image Album
        </title>
        <link href="/css/lightbox.css" rel="stylesheet">
        <link href="/css/styles.css"  rel="stylesheet">

        <script type="text/javascript" src="/js/jquery.min.js"></script> 
        <script type="text/javascript" src="/js/lightbox-2.6.min.js"></script>

    </head>
    <body> 
        <div class="container">   
            <div class="bottom">
                @if($images)
                @foreach($images as $value=>$key)
                <div class="col-md-2 ">
                    <a href="/{{$key}}" data-lightbox='nondatabasealbum'><img src="/{{$key}}" height="170" width="160"></a><br>
                    <?php $path = explode("/", $key);
                    $path1 = implode(",", $path);
                    ?>
                    <!--            <a href="{{ URL::route('myimages',['name'=>$path1])}}">[X]</a>
                                </div>-->
                    @endforeach

                    @endif
                    <br/><a href="{{URL::route('myalbum')}}">Back to Album</a>
                </div>
            </div>

    </body>
</html>