<!Doctype Html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SpellChecker</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/spellchecker.js"></script>
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


        <div class="container-fluid margintop">

 <div class="col-md-5 col-md-offset-3 text">
               Spelling Check:* <input type="text" id="word" name="autosuggest">
                <ul id="list" class="result"></ul>
        </div>
    </body>
</html>