<!Doctype Html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SpellChecker</title>
        


    </head>
    <body>


        <div class="container-fluid margintop">

            <div class="col-md-5 col-md-offset-3 text">
                Spelling Check:* <input type="text" id="word" name="autosuggest" class="autosuggest">
                <ul id="list" class="result"></ul>
            </div>
        </div>
    </body>
</html>