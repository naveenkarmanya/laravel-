<!Doctype Html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SpellChecker</title>
        
<link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/spellchecker.js"></script>

    </head>
    <body>


        <div class="container-fluid margintop">

            <div class="col-md-5 col-md-offset-3">
                <label>SPELLCHECKER*:</label><br>

                <input type="text" id="word" name="autosuggest" class="autosuggest">
                
                <ul id="list" class="result"></ul>
            </div>
        </div>
    </body>
</html>