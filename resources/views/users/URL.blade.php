<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            URL Shortening
        </title>
        <link href="css/styles.css" rel="stylesheet"/>
         <link href="css/urlStyles.css" rel="stylesheet"/>
        <script type="text/javascript" src="/js/jquery.min.js" />  </script> 
      <script type="text/javascript" src="/js/url.js" /> </script> 

    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="heading">
                <h1>URL Shorten</h1>
                <p>enter a long URL and have ot shortened</p>
                </div>
                <form>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p><input type="text" name="url" id="url" size="60" />
                      
                                <input type="button" value="Shorten" onclick="go()"></p>
                    <div id="message"><p>&nbsp;</p></div>
                    
                    
                    
                </form>
            </div>
        </div>

    </body>
</html>