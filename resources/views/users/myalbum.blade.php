<!Doctype Html>
<html>
    <head>
        <title>First template</title>
<meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/album.js"></script>
        <style>
            
            .margintop
            {
                margin: 30px;
                position: relative;
                top: 100px;
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

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL::route('createsuccess') }}">Home</a></li>

                    <li><a href="{{ URL::route('createalbum') }}">Create Album</a></li>
                    <li><a href="{{ URL::route('image') }}">Upload Images</a></li>
                    <li><a href="{{ URL::route('myalbum') }}">My Album</a></li>
                    <li><a href="{{ URL::route('about') }}">About us</a></li>

                </ul>
                <ul class="nav nav-navbar pull-right">
                    <li><a href="{{ URL::route('upload') }}">LogOut</a></li>
                </ul>
            </div>

        </div>


    </nav>

    <div class="container-fluid margintop">
        <div class="row">
            <div class="well result col-md-4" id="album">
               @foreach($users2 as $key)
         
<!--                <a href="{{URL::route('folder',["folder"=>$key])}}">{{$key}}</a> <br/>-->
               <a href="{{URL::Route('myimages')}}"> {{$key}}</a>
               @endforeach
                
            </div>
            
        </div>
    </div>
        <div class="container">
            <div class="content">
                @if(isset($users2))
                
                @foreach($users2 as $folder)
               <div class="col-md-2 ">
            <a href="/{{$key}}" data-lightbox='nondatabasealbum'><img src="/{{$key}}" height="170" width="160"></a><br>
            <?php $path=explode("/",$key);
            $path1=  implode(",",$path);?>
            <a href="{{ URL::route('myalbum',['name'=>$path1])}}">[X]</a>
            </div>
            @endforeach
                @endif
                

        </div>
</body>
</html>