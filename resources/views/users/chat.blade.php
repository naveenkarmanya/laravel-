<!doctype html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Ajax Chat Application</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <script src="/js/jquery.min.js"></script>
    
        <style>
            .message
            {
                width:260px;
                height:210px;
                padding: 5px;
                border: 2px solid black;
                overflow-y: scroll;

            }
            .messages
            {
                color: slategrey;
            }
            #text
            {
                width:260px;
                height:40px;
                padding: 5px;
                margin-top:5px;
                font: 1em Arial;

            }
        </style>

    </head>
    <body>

        <script> var name = "<?php echo $name . "<br>"; ?>";</script>
        <script src="/js/chat.js"></script>

        <div class="chat">
            <h1>Chat Application</h1>
            <div class="messages">
                <div class="message">

                </div>

            </div>
            <textarea id="text" name="text" value="insert" placeholder="Text Here.."></textarea>
        </div>
    </body>
</html>