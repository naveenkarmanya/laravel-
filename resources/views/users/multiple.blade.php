<!DOCTYPE html>
<html>
    <head>
        <title>multilefileupload</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <form action="{{ URL::route('multiple') }}" method="post"enctype="multipart/form-data">
                    
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="file" name="upload[]" multiple>    
                    <input type="submit" name="submit" value="Upload">

                </form>
                 <p>@if(isset($multiplefile_value))
                    
                     <strong style="color:black;"> {{ $multiplefile_value}}</strong>
                  
                    @endif</p>
            </div>
        </div>
    </body>
</html>