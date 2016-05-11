<!doctype html>
<html>
    <head>
        <title>Search Engine</title>
        <link href="/css/autosuggest.css" rel="stylesheet">
          <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/jquery.min.js" type="text/javascript"></script>
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
       <nav class="navbar-default navbar-fixed">
            <div class="container">
                
                <div class="navbar-header">
                 <h2>Search Engine</h2>
                    <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                        <span class="sr-only"> Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li ><a href="{{ URL::route('searchengine')}}">Home</a></li>
                    </ul>
                </div>
            </div>
       </nav><br><br>
        <div class="container">
            <form method="post" action="{{URL::route('searchenginesubmit')}}">
             <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
             
            <div class="col-md-12 top">     
                <div class="col-md-6">
                    <input type="text" class="form-control" name="search" placeholder="Type key word to search">
                </div>
                </div>
            <div class="col-md-1 col-md-offset-2 top">
                <input class="form-control" type="submit" value="Search">
                </div>
            </form>
            <div class="col-md-12 top">
                @if(isset($message))
                <h3>{{$message}}</h3>
                @endif
                @if(isset($result))
                <?php echo $result;?>
                @endif
            </div>
        </div>
    </body>
</html>