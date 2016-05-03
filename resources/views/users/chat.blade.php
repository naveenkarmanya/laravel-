<!Doctype Html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Chat Application</title>
       <link rel="stylesheet" href="css/chat.css" type="text/css">
        <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/spellchecker.js"></script>


    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">


        <div class="container-fluid margintop">

                   <div class="chat">
            <div class="messages">
                <div class="message">
                    
                </div>
                
            </div>
            <textarea id="text" name="text" value="insert" placeholder="Text Here.."></textarea>
        </div>
        </div>
    </body>
</html>